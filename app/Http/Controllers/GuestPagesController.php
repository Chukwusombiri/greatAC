<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Review;
use Illuminate\Http\Request;

class GuestPagesController extends Controller
{
    public function index()
    {
        $reviews = Review::select('client', 'comment', 'occupation', 'photo_path')
            ->inRandomOrder()
            ->take(3)
            ->get();

        if ($reviews->isEmpty()) {
            $reviews = collect(
                [
                    [
                        'client' => 'Marcus Bennett',
                        'comment' => 'Working with ' . config('app.name') . ' has completely transformed my investment strategy. Their team expertly manages my portfolio across multiple sectors—stocks, crypto, real estate—so I can focus on growing my business. The returns have been consistent and the support outstanding.',
                        'occupation' => 'Business Consultant',
                        'photoUrl' => 'https://randomuser.me/api/portraits/men/55.jpg'
                    ],
                    [
                        'client' => 'Isabella Clarke',
                        'comment' => 'I’ve tried several investment platforms, but none match the professionalism and results I’ve seen with ' . config('app.name') . '. From the first consultation, they tailored a strategy to match my risk appetite, and I’ve seen growth every quarter. Trustworthy, responsive, and truly client-focused.',
                        'occupation' => 'HR Manager',
                        'photoUrl' => 'https://randomuser.me/api/portraits/women/57.jpg'
                    ],
                    [
                        'client' => 'Nathan Osei',
                        'comment' => 'What sets ' . config('app.name') . ' apart is their hands-on approach. I no longer worry about market swings or portfolio balance—they handle it all. My investments are now structured, diverse, and showing steady growth. It\'s a relief to have professionals on my side.',
                        'occupation' => 'Mechanical Engineer',
                        'photoUrl' => 'https://randomuser.me/api/portraits/men/58.jpg'
                    ]
                ]
            )->map(function ($item) {
                return (object) $item;
            });
        }
        $plans = Plan::take(2)->get();
        return view('guest.index')->with([
            'reviews' =>  $reviews,
            'plans' => $plans
        ]);
    }

    public function managedInvesting()
    {
        $plans = Plan::all();
        return view('guest.managedInvesting')->with('plans', $plans);
    }

    public function pricing()
    {
        $plans = Plan::all();
        $reviews = Review::select('client', 'comment', 'occupation', 'photo_path')
            ->inRandomOrder()
            ->take(7)
            ->get();

        if ($reviews->isEmpty()) {
            $reviews = collect([
                [
                    'client' => 'Ethan Lewis',
                    'comment' => config('app.name') . ' brings structure and clarity to my investments. I value their market expertise and consistent communication.',
                    'occupation' => 'Logistics Manager',
                    'photoUrl' => 'https://randomuser.me/api/portraits/men/61.jpg'
                ],
                [
                    'client' => 'Liam Carter',
                    'comment' => 'Since partnering with ' . config('app.name') . ', my portfolio has become more diversified and resilient. I trust their strategy completely.',
                    'occupation' => 'Civil Engineer',
                    'photoUrl' => 'https://randomuser.me/api/portraits/men/67.jpg'
                ],
                [
                    'client' => 'Noah Greene',
                    'comment' => 'I’m impressed with the professionalism and performance of ' . config('app.name') . '. They’ve helped me stay ahead in a volatile market.',
                    'occupation' => 'Data Scientist',
                    'photoUrl' => 'https://randomuser.me/api/portraits/men/63.jpg'
                ],
                [
                    'client' => 'Ava Mitchell',
                    'comment' => config('app.name') . ' made investing approachable and empowering. Their clear communication and data-driven strategies helped me grow my savings with confidence.',
                    'occupation' => 'Financial Analyst',
                    'photoUrl' => 'https://randomuser.me/api/portraits/women/65.jpg'
                ],
                [
                    'client' => 'Chloe Ramirez',
                    'comment' => 'I appreciate how ' . config('app.name') . ' aligns my investments with my long-term goals. The support and insights they offer are top-notch!',
                    'occupation' => 'Healthcare Administrator',
                    'photoUrl' => 'https://randomuser.me/api/portraits/women/68.jpg'
                ],
                [
                    'client' => 'Natalie Brooks',
                    'comment' => 'Professional, reliable, and results-driven. My experience with ' . config('app.name') . ' has been nothing short of excellent.',
                    'occupation' => 'Corporate Lawyer',
                    'photoUrl' => 'https://randomuser.me/api/portraits/women/62.jpg'
                ],
                [
                    'client' => 'Jessica Brown',
                    'comment' => 'I’ve tried multiple investment platforms, but none compare to ' . config('app.name') . '. Their strategic planning and excellent customer support make all the difference. My portfolio is thriving, and I am grateful for their expertise!',
                    'occupation' => 'Banking Professional',
                    'photoUrl' => 'https://randomuser.me/api/portraits/women/75.jpg'
                ],
                [
                    'client' => 'Noah Greene',
                    'comment' => 'I’m impressed with the professionalism and performance of ' . config('app.name') . '. They’ve helped me stay ahead in a volatile market.',
                    'occupation' => 'Data Scientist',
                    'photoUrl' => 'https://randomuser.me/api/portraits/men/63.jpg'
                ]
            ])->map(function ($item) {
                return (object) $item;
            });
        }
        return view('guest.pricing')->with(['plans' => $plans, 'reviews' => $reviews]);
    }

    public function contact()
    {
        return view('guest.contact');
    }

    public function about()
    {
        return view('guest.about');
    }

    public function reviews()
    {
        return view('guest.reviews');
    }

    public function knowledgeBase()
    {
        return view('guest.knowledge_base');
    }

    public function blog()
    {
        return view('guest.blog');
    }

    public function certificate()
    {
        $filePath = 'company/binarypro.pdf';
        $fullPath = storage_path('app/public/' . $filePath);

        if (!file_exists($fullPath)) {
            abort(404, 'File not found.');
        }

        $name = config('app.name') . ' CERTIFICATE OF INCORPORATION.pdf';

        return response()->download($fullPath, $name, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $name . '"',
        ]);
    }
}
