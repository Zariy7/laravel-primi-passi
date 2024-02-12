<?php
    $sections = [
        [
            'name'  =>  'Home',
            'path'  =>  '/',
        ],
        [
            'name'  =>  'Offer List',
            'path'  =>  'offer-list',
        ],
        [
            'name'  =>  'About Us',
            'path'  =>  'about-us',
        ],
        [
            'name'  =>  'Financial Statements',
            'path'  =>  'financial-statements',
        ],
    ]
?>

<div class="container">
    <div class="d-flex justify-content-between bg-info p-3 rounded">
        @foreach ($sections as $section)
            <a href="{{url($section['path'])}}" >
                <div class="btn btn-primary">
                    {{ $section['name'] }}
                </div>
            </a>
        @endforeach
    </div>
</div>