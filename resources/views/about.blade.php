@extends('layouts.page')

@section('title', 'About Venn Calculator')
@section('container', 'about')

@section("content")

<md-app-content>
    <p><strong>Venn Calculator is a report generator project set up to compare the costs of different items!</strong></p>
    <p>Here are the steps:</p>
    <ul>
        <li>Enter in your items</li>
        <li>Select your teams</li>
        <li>Rank your items</li>
        <li>Click <strong>Run Comparison</strong></li>
    </ul>
    <p>Features include:</p>
    <ul>
        <li>Exportable comparison results to downloadable file formats</li>
        <li>Multi-item "team" comparisons</li>
        <li>Total cost calculations</li>
        <li>Option to change units for rankings <em>(for when money is <strong>not</strong> the main goal)</em></li>
    </ul>
</md-app-content>
        
@endsection