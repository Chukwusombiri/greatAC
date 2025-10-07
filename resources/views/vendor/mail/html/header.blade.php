@props(['url'])
@php
    $path = public_path('images/app-logo.png');
@endphp
<tr>
    <td class="header">
        <a href="{{ $url }}"
            style="display: inline-flex; flex-direction: column; align-items: center; gap: 0; font-family: 'Hedvig Letters Serif', serif;">
            @if (file_exists($path))
                <img src="{{ asset('images/app-logo.png') }}" alt="App Logo" height="50px">
            @else
                <span
                    style="width: 100%; line-height: 1; text-align: center; color: #f9fafb; font-family: 'Sedan', sans-serif; text-transform: uppercase; font-weight: 800; font-size: 1.125rem; letter-spacing: 2px; margin-bottom: 0; padding-bottom: 0;">
                    RECTA
                </span>

                <div
                    style="margin-top: 0; padding-top: 0; line-height: 1; display: flex; flex-direction: column; gap: 2px; align-items: center; justify-content: space-around;">
                    <span
                        style="font-size: 10px; font-weight: 600; color: #f9fafb; text-transform: uppercase; line-height: 1; letter-spacing: 0.1em;">
                        earners
                    </span>

                    <span style="width: 100%; height: 3px; background-color: #2563eb; "></span>

                    <span
                        style="font-size: 10px; font-weight: 600; color: #f9fafb; text-transform: uppercase; line-height: 1; letter-spacing: 0.1em;">
                        corp
                    </span>
                </div>
            @endif
        </a>

    </td>
</tr>
