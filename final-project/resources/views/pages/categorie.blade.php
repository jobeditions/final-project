@extends('layouts.master')
@section('content')
<div class="case-item-wrap">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="/images/images/img5.jpg" alt="our case">
                                    </div>
                                    <h6 class="case-item__title"><a href="#">Investigationes demonstraverunt legere</a></h6>
                                </div>
                            </div>
                            
                            <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                           
                            @foreach($category->posts as $categ)
                            
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                        <img src="/images/images/img6.jpg" alt="our case">
                                    </div>
                                   
                                    <h6 class="case-item__title">{{$categ->title}}</h6>
                                </div>
                             @endforeach   
                            
                            </div>
                        
                           
                            <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                <div class="case-item">
                                    <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                                        <img src="/images/images/img4.jpg" alt="our case">
                                    </div>
                                    <h6 class="case-item__title">quod mazim placerat facer possim assum</h6>
                                </div>
                            </div>
                        </div>
</div>
@endsection