<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo4/form_fileupload.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 07:08:44 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>OCR Scan ID Card</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body data-spy="scroll" data-target="#navSection" data-offset="100">
    <div class="main-container" id="container">
        <div class="container">
            <div id="content" class="main-content">
                <div class="pl-2 pr-2 pb-2">
                    <form method="post" id="insert_form" enctype="multipart/form-data">
                        <div class="row layout-top-spacing">
                            <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12 p-4">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="inputPassword4">Name:</label>
                                                            <input type="text" class="form-control" id="names">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="inputPassword4">Date of Birth:</label>
                                                            <input type="text" class="form-control" id="dob">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="inputPassword4">ID No:</label>
                                                            <input type="text" class="form-control" id="idno">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="inputPassword4">Issued:</label>
                                                            <input type="text" class="form-control" id="issued">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="inputPassword4">Expires:</label>
                                                            <input type="text" class="form-control" id="exp">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8" style="display:none;" id="form">
                                                    <div class="col-md-8" style="display:none;" id="result">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                                                <h4>Upload Files</h4>
                                            </div>
                                            <div class="col-xl-6 col-md-6 col-sm-12 col-12">

                                                <input type="submit" class="btn btn-primary" name="insert" id="insert"
                                                    value="Save" style="float:right" />
                                            </div>
                                        </div>
                                        <div class="custom-file-container" data-upload-id="myFirstImage">
                                            <label>Upload (Single File) <a href="javascript:void(0)"
                                                    class="custom-file-container__image-clear"
                                                    title="Clear Image">x</a></label>
                                            <label class="custom-file-container__custom-file">
                                                <input type="file" id="image" name="v_image"
                                                    onchange="proccess(window.lastFile=this.files[0])"
                                                    class="custom-file-container__custom-file__custom-file-input"
                                                    accept="image/*">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                <span
                                                    class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview" width="5000"
                                                height="5000">
                                                <button id="click-photo">Click Photo</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <button id="start-camera">Start Camera</button> -->
                            <video id="video" width="320" height="240" autoplay></video>
                            <canvas id="canvas" width="320" height="240"></canvas>
                        </div>
                    </form>
                </div>
                <!--  END CONTENT AREA  -->
            </div>
            <!-- END MAIN CONTAINER -->
        </div>
        <script src='https://cdn.rawgit.com/naptha/tesseract.js/1.0.10/dist/tesseract.js'></script>
        <script src="https://code.jquery.com/jquery-3.6.3.js"
            integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <script>
            
            var fileName;
            $('input[type="file"]').change(function (e) {
                fileName = e.target.files[0].name;
                alert(fileName);
            });
            function proccess(file) {
                $(".result").html("");
                //Preview Image
                var src = (window.URL ? URL : webkitURL).createObjectURL(file);
                $('#image, #canvas').click(function () {
                    if (this.id == 'submit1') {
                        $("#image").attr("src", src);
                    }
                    else if (this.id == 'submit2') {
                        $("#canvas").attr("src", src);
                    }
                });
                //  $("#image").attr("src", src);
                //Proccess Image
                Tesseract.recognize(file)
                    .progress(function (data) {
                        //  console.log(data);
                        progress(data);
                    })
                    .then(function (data) {
                        console.log(data);
                        result(data)
                        const entries = Object.entries(data);
                        console.log(entries[9][1][0]);
                        let namee = entries[9][1][4]['text'];
                        document.getElementById("names").value = namee;

                        let dob = (entries[9][1][9]['text'], entries[9][1][8]['text']);
                        console.log(entries[9][1][9]['text'], entries[9][1][8]['text']);
                        document.getElementById("dob").value = dob;

                        let idno = entries[9][1][14]['text'];
                        console.log(entries[9][1][14]['text']);
                        document.getElementById("idno").value = idno;

                        let issued = entries[9][1][22]['text'];
                        console.log(entries[9][1][22]['text']);
                        document.getElementById("issued").value = issued;

                        let exp = entries[9][1][28]['text'];
                        console.log(entries[9][1][28]['text']);
                        document.getElementById("exp").value = exp;
                    })
            }
            function progress(packet) {
                var r = $("#result");

                if (r.length > 0 && r.find(".status").last().html() == packet.status) {
                    if ('progress' in packet) {
                        r.find("progress").last().val(packet.progress);
                    }
                } else {
                    var tStatus = "<div class='status ten wide column'>" + packet.status + "</div>";
                    var tProgress = "<div class='six wide column'>" + (typeof packet.progress == "undefined" ? "" : ("<progress value='" + packet.progress + "' max='1'>")) + "</div>";
                    r.append(tStatus + tProgress);
                }
            }
            function result(data) {
            }
            let camera_button = document.querySelector("#start-camera");
            let video = document.querySelector("#video");
            let click_button = document.querySelector("#click-photo");
            let canvas = document.querySelector("#canvas");
          
            camera_button.addEventListener('click', async function () {
                let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
                video.srcObject = stream;
            });
            click_button.addEventListener('click', function () {
                canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
                let image_data_url = canvas.toDataURL('image/jpeg');

                // data url of the image
                console.log(image_data_url);
            });
            if(navigator.mediaDevices.getUserMedia){
                navigator.mediaDevices.getUserMedia({vedio:true});
            }else{
                console.log("No")
            }
        </script>
        <script>
            //First upload
            var firstUpload = new FileUploadWithPreview('myFirstImage')
            //Second upload
            var secondUpload = new FileUploadWithPreview('mySecondImage')
        </script>
        <!-- END PAGE LEVEL PLUGINS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/form_fileupload.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 07:08:45 GMT -->

</html>