@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-account-multiple widget-icon"></i>
                                                </div>
                                                @foreach ($blog as $item)
                                                <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Blogs</h5>
                                                <h3 class="mt-3 mb-3">{{ $item->jumlah}}</h3>
                                                <p class="mb-0 text-muted">
                                                    {{-- <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span> --}}
                                                    <span class="text-nowrap">Count Blogs</span>  
                                                </p>
                                                @endforeach
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-cart-plus widget-icon"></i>
                                                </div>
                                                @foreach ($user as $akun)
                                                    
                                                <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Accounts</h5>
                                                <h3 class="mt-3 mb-3">{{$akun->jumlah}}</h3>
                                                <p class="mb-0 text-muted">
                                                    {{-- <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 1.08%</span> --}}
                                                    <span class="text-nowrap">Count Accounts</span>
                                                </p>
                                                @endforeach
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                               
                                </div> <!-- end row -->

                             <!-- end col -->

                            <div class="col-xl-7 col-lg-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-currency-usd widget-icon"></i>
                                                </div>
                                                @foreach ($msg as $item)
                                                    
                                                <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Message</h5>
                                                <h3 class="mt-3 mb-3">{{$item->jumlah}}</h3>
                                                <p class="mb-0 text-muted">
                                                    {{-- <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 7.00%</span> --}}
                                                    <span class="text-nowrap">Count Messages</span>
                                                </p>
                                                @endforeach
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-pulse widget-icon"></i>
                                                </div>
                                                @foreach ($project as $item)
                                                    
                                                <h5 class="text-muted fw-normal mt-0" title="Growth">Projects</h5>
                                                <h3 class="mt-3 mb-3">{{$item->jumlah}}</h3>
                                                <p class="mb-0 text-muted">
                                                    {{-- <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span> --}}
                                                    <span class="text-nowrap">Count Projects</span>
                                                </p>
                                                @endforeach
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end col -->
                            </div>
                        <!-- end row -->
                        </div>
                <!-- content -->
                @endsection
