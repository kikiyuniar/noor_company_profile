@extends('page_core.app')  
   <!-- partial -->
   @section('konten')
                     <div class="row">
                            <div class="col-12">
                                <div class="card">
                                
                                    <div class="card-body">
                                    <form action="/insert_postalbum" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @if ($message = Session::get('success'))
                                        <div style="text-align: center" class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ $message }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                          </div>
                                        @endif
                                    <div class="mb-3">
                                                    <label for="projectname" class="form-label header-title m-t-0">Judul Album </label>
                                                    <input type="text" id="projectname" name="judul_album" class="form-control" placeholder="Enter name">
                                        </div>
                                        <h4 class="header-title m-t-0">Dropzone File Upload</h4>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#file-upload-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Album
                                                </a>
                                            </li>

                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="file-upload-preview">
                                                <div  class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                                    data-upload-preview-template="#uploadPreviewTemplate">
                                                    <div class="fallback">
                                                        <input name="file_foto_album" type="file" multiple />
                                                    </div>

                                                    <div class="dz-message needsclick">
                                                        <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                        <h3>Drop files here or click to upload.</h3>
                                                        <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                            <strong>not</strong> actually uploaded.)</span>
                                                    </div>
                                                </div>

                                                <!-- Preview -->
                                                <div class="dropzone-previews mt-3" id="file-previews"></div>                                         
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="file-upload-code">
                                                <p>Make sure to include following js files at end of <code>body element</code></p>

                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- plugin js --&gt;
                                                        &lt;script src=&quot;assets/js/vendor/dropzone.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;!-- init js --&gt;
                                                        &lt;script src=&quot;assets/js/ui/component.fileupload.js&quot;&gt;&lt;/script&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->

                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- File Upload --&gt;
                                                        &lt;form action=&quot;/&quot; method=&quot;post&quot; class=&quot;dropzone&quot; id=&quot;myAwesomeDropzone&quot; data-plugin=&quot;dropzone&quot; data-previews-container=&quot;#file-previews&quot;
                                                            data-upload-preview-template=&quot;#uploadPreviewTemplate&quot;&gt;
                                                            &lt;div class=&quot;fallback&quot;&gt;
                                                                &lt;input name=&quot;file&quot; type=&quot;file&quot; multiple /&gt;
                                                            &lt;/div&gt;
                                                        
                                                            &lt;div class=&quot;dz-message needsclick&quot;&gt;
                                                                &lt;i class=&quot;h1 text-muted dripicons-cloud-upload&quot;&gt;&lt;/i&gt;
                                                                &lt;h3&gt;Drop files here or click to upload.&lt;/h3&gt;
                                                                &lt;span class=&quot;text-muted font-13&quot;&gt;(This is just a demo dropzone. Selected files are
                                                                    &lt;strong&gt;not&lt;/strong&gt; actually uploaded.)&lt;/span&gt;
                                                            &lt;/div&gt;
                                                        &lt;/form&gt;
                                                        
                                                        &lt;!-- Preview --&gt;
                                                        &lt;div class=&quot;dropzone-previews mt-3&quot; id=&quot;file-previews&quot;&gt;&lt;/div&gt;

                                                        &lt;!-- file preview template --&gt;
                                                        &lt;div class=&quot;d-none&quot; id=&quot;uploadPreviewTemplate&quot;&gt;
                                                            &lt;div class=&quot;card mt-1 mb-0 shadow-none border&quot;&gt;
                                                                &lt;div class=&quot;p-2&quot;&gt;
                                                                    &lt;div class=&quot;row align-items-center&quot;&gt;
                                                                        &lt;div class=&quot;col-auto&quot;&gt;
                                                                            &lt;img data-dz-thumbnail src=&quot;#&quot; class=&quot;avatar-sm rounded bg-light&quot; alt=&quot;&quot;&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class=&quot;col ps-0&quot;&gt;
                                                                            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;text-muted fw-bold&quot; data-dz-name&gt;&lt;/a&gt;
                                                                            &lt;p class=&quot;mb-0&quot; data-dz-size&gt;&lt;/p&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;div class=&quot;col-auto&quot;&gt;
                                                                            &lt;!-- Button --&gt;
                                                                            &lt;a href=&quot;&quot; class=&quot;btn btn-link btn-lg text-muted&quot; data-dz-remove&gt;
                                                                                &lt;i class=&quot;dripicons-cross&quot;&gt;&lt;/i&gt;
                                                                            &lt;/a&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                        <div style="text-align: center;">
                                        <button class="btn btn-success">Upload</button>
                                        </div>
                                        <form>

                                        
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->




    @endsection
