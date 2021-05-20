@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
   <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Massage List</h4>
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#scroll-vertical-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="scroll-vertical-preview">
                                                <table id="scroll-vertical-datatable" class="table dt-responsive nowrap">
                                                    <thead>
                                                        <tr style="text-align: center;">
                                                            <th>Nama</th>
                                                            <th>Email</th>
                                                            <th>Subject</th>
                                                            <!-- <th>Massage</th> -->
                                                            <th>Status</th>
                                                            <th>Tandai</th>
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                
                                                @foreach ($data as $tampilka)
                                                    <tbody>
                                                        <tr style="text-align: center;">

                                                        @if($tampilka->status == 'Belum Terbaca')
                                                            <td><b>{{$tampilka->nama}}</b></td>
                                                            <td><b>{{$tampilka->email}}</b></td>
                                                            <td><b>{{$tampilka->subject}}</b></td>
                                                            <!-- <td><b>{{$tampilka->msg}}</b></td> -->
                                                            <td><b>{{$tampilka->status}}</b></td>
                                                            <td>
                                                            <form action="/read_msg" method="post">
                                                            @csrf
                                                            <input type="text" name="id" value="{{$tampilka->id}}" hidden>
                                                            <button class="btn btn-success" type="submit">Baca</button>
                                                            </form>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$tampilka->id}}" data-bs-whatever="@mdo">Lihat</button>
                                                                <a href="/delete_msg/{{ $tampilka->id}}" class="delete"><i class="material-icons " style="color: red;" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                                            </td>
                                                        @elseif ($tampilka->status == 'Terbaca')
                                                            <td>{{$tampilka->nama}}</td>
                                                            <td>{{$tampilka->email}}</td>
                                                            <td>{{$tampilka->subject}}</td>
                                                            <!-- <td>{{$tampilka->msg}}</td> -->
                                                            <td>{{$tampilka->status}}</td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$tampilka->id}}" data-bs-whatever="@mdo">Lihat</button>
                                                                <a href="/delete_msg/{{ $tampilka->id}}" class="delete"><i class="material-icons " style="color: red;" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                                            </td>
                                                        @endif
                                                        </tr>

                                                    </tbody>
                                                    @endforeach
                                                </table>                     
                                            </div> <!-- end preview-->

                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->

                        @foreach ($data as $tampilka)
                        <div class="modal fade" id="exampleModal{{$tampilka->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Pengirim:</label>
                                        <input type="text" class="form-control" id="recipient-name" value="{{$tampilka->email}}" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Message:</label>
                                        <textarea class="form-control" id="message-text" style="width: 100%; height: 300px;" >{!! nl2br($tampilka->msg) !!}</textarea>
                                    </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    
                                </div>
                                </div>
                            </div>
                            </div>
                            @endforeach
    @endsection