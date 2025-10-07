<?php

namespace App\Http\Livewire\Admin;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use Livewire\Component;

class UserProfile extends Component
{
    use WithFileUploads;

    public $photo;
    public $username = '';
    public $email = '';
    public $first_name = '';
    public $last_name = '';
    public $phone = '';
    public $address ='';
    public $country ='';
    public $city ='';  
    public $acRoi ='';
    public $acBal =''; 
    public $perMonRoi = '';
    public $plusRoi = '';
    public $currentPlan = '';
    public ?User $user = null;
    public $plans; 
    public $allCountries = [
        'Afghanistan', 'Albania', 'Algeria', 'Andorra', 'Angola', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Brazil', 'Brunei', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Cabo Verde', 'Cambodia', 'Cameroon', 'Canada', 'Central African Republic', 'Chad', 'Chile', 'China', 'Colombia', 'Comoros', 'Congo', 'Costa Rica', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic', 'Democratic Republic of the Congo', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Eswatini', 'Ethiopia', 'Fiji', 'Finland', 'France', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Greece', 'Grenada', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Honduras', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Israel', 'Italy', 'Ivory Coast', 'Jamaica', 'Japan', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'Kosovo', 'Kuwait', 'Kyrgyzstan', 'Laos', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Mauritania', 'Mauritius', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Morocco', 'Mozambique', 'Myanmar', 'Namibia', 'Nauru', 'Nepal', 'Netherlands', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'North Korea', 'North Macedonia', 'Norway', 'Oman', 'Pakistan', 'Palau', 'Palestine', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Poland', 'Portugal', 'Qatar', 'Romania', 'Russia', 'Rwanda', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Korea', 'South Sudan', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Sweden', 'Switzerland', 'Syria', 'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican City', 'Venezuela', 'Vietnam', 'Yemen', 'Zambia', 'Zimbabwe'
    ];
    
    protected $listeners = [
        'removedPhoto'=>'$refresh',
        'userUpdated'=>'$refresh',
        'savedPlan'=>'$refresh',       
    ];


    public function mount($sentId){        
        $this->user =User::with('activePlan')->find($sentId);  
        $this->username = $this->user->username;        
        $this->email = $this->user->email;
        $this->acRoi = $this->user->acRoi;
        $this->acBal = $this->user->acBal;
        $this->perMonRoi = $this->user->perMonRoi;
        $this->first_name = $this->user->first_name;
        $this->last_name = $this->user->last_name;
        $this->phone = $this->user->phone;       
        $this->country = $this->user->country;
        $this->city = $this->user->city;        
        $this->address = $this->user->address;
        $this->currentPlan = $this->user->plan_id;
        $this->plans = Plan::all();
    }

    public function editRoi (){
        $this->validate(
            [
                'acRoi'=>['required','numeric'],
            ],);

        $this->user->acRoi = $this->acRoi;
        $this->user->save();
        $this->emit('savedRoi');
    }

    public function editPerMonRoi (){
        $this->validate(
            [
                'perMonRoi'=>['required','numeric'],
            ],);

        $this->user->perMonRoi = $this->perMonRoi;
        $this->user->save();
        $this->emit('savedPerMonRoi');
    }

    public function editCapital (){
        $this->validate(
            [
                'acBal'=>['required','numeric'],
            ],);

        $this->user->acBal = $this->acBal;
        $this->user->save();
        $this->emit('savedCapital');
    }

    public function addProfit(){
        $this->validate([
            'plusRoi' => 'required|numeric|integer',
        ],[],[
            'plusRoi' => 'Amount to add',
        ]);

        $this->user->acRoi += $this->plusRoi;
        $this->user->perMonRoi += $this->plusRoi;
        $this->user->save();                
        $this->acRoi += $this->plusRoi;
        $this->perMonRoi += $this->plusRoi;
        $this->plusRoi = '';
        $this->emit('savedProfit');
    }

    public function setPlan(){
        $this->validate([
            'currentPlan' => 'required|exists:plans,id',
        ],[],[
            'currentPlan' => 'Current plan',
        ]);

        $this->user->plan_id = $this->currentPlan;
        $this->user->save();
        $this->emit('savedPlan');
    }
    
    public function removeImage(){
        $user = User::find($this->user->id);
        if($user->profile_photo_path!==null){
            Storage::disk('public')->delete($user->profile_photo_path);    
            $user->profile_photo_path = null;
            $user->save();  
            $this->emit('removedPhoto'); 
            return redirect()->route('admin.user.edit',[$this->user->id]);  
        }      
    }

    public function savePersonal(){
       $this->validate([
        'username' => ['required', 'string', 'max:255'],
        'first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255',Rule::unique('users','email')->ignore($this->user->id)],           
        'photo'=>[Rule::excludeIf(!$this->photo),'image','max:2000'],   
       ]);
             
       $this->user->username = $this->username;
       $this->user->email = $this->email;    
       $this->user->first_name=$this->first_name;
       $this->user->last_name=$this->last_name;      

       if($this->photo){
        if($this->user->profile_photo_path!==null){
            Storage::disk('public')->delete($this->user->profile_photo_path);
        }
        $this->user->profile_photo_path = $this->photo->store('profile-photos','public');
       }
       $this->user->save();

       $this->emit('savedPersonal');
    }

    public function saveContact(){
        $this->validate([
            'address'=>['required','string'],
            'phone' => ['required', 'regex:/^(\+[0-9] ?+|[0-9] ?+){6,14}[0-9]$/'],            
            'city' => ['required', 'string'],
            'country' => ['required', 'string', Rule::in($this->allCountries)],
        ]);

        $this->user->address = $this->address;
        $this->user->phone = $this->phone;
        $this->user->city = $this->city;
        $this->user->country = $this->country;
        $this->user->save();

        $this->emit('savedContact');
    }

    public function render()
    {       
        return view('livewire.admin.user-profile');
    }

    protected function rules(){
        return [
                    
            'acBal'=>['required','integer','numeric'],              
            'acRoi'=>['required','numeric'],
            'perMonRoi'=>['required','numeric'],
            
            
        ];
    }
}
