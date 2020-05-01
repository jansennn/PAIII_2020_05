@extends('layouts.CBT.master')
​
@section('title')
    <title>Manajemen Kategori Wisata</title>
@endsection
​
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
​
        

        <div class="container-fluid">
            <div class="col-lg-12">
            <div class="row">
                <div class="col-md-4 mt-5 mb-3">
                    <div class="card">
                       <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-thumb-up"></i> Objek Wisata</div>
                                <h2>{{ $objekWisatas }}</h2>
                            </div>
                            <canvas id="seolinechart1" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5 mb-3">
                    <div class="card">
                       <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-thumb-up"></i> Akomodasi</div>
                                <h2>{{ $akomodasis }}</h2>
                            </div>
                            <canvas id="seolinechart1" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5 mb-3">
                    <div class="card">
                       <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-thumb-up"></i> Kuliner</div>
                                <h2>{{ $kuliners }}</h2>
                            </div>
                            <canvas id="seolinechart1" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5 mb-3">
                    <div class="card">
                       <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-thumb-up"></i> Event</div>
                                <h2>{{ $events }}</h2>
                            </div>
                            <canvas id="seolinechart1" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5 mb-3">
                    <div class="card">
                       <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-thumb-up"></i> Budaya</div>
                                <h2>{{ $budayas }}</h2>
                            </div>
                            <canvas id="seolinechart1" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5 mb-3">
                    <div class="card">
                       <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-thumb-up"></i> CBT</div>
                                <h2>{{ $cbts }}</h2>
                            </div>
                            <canvas id="seolinechart1" height="50"></canvas>
                        </div>
                    </div>
                </div>
                        
            </div>
        </div>
        </div>
    </div>
@endsection