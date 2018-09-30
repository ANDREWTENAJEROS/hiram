@extends('layouts.app')

@section('content')
    <h1><?php echo $title; ?></h1>
    <p>This is About page</p>
    <script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.2/firebase.js"></script>
    <script>
    require("firebase/firestore");

    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyBelquR5Gju6r08rwM1Eqng5rDc0ucAzM0",
        authDomain: "hiram-b883d.firebaseapp.com",
        databaseURL: "https://hiram-b883d.firebaseio.com",
        projectId: "hiram-b883d",
        storageBucket: "hiram-b883d.appspot.com",
        messagingSenderId: "925777659021"
    };
    
    firebase.initializeApp(config);


    </script>
        <script src="js/main.js"></script>
        <script>
                var uploader = document.getElementById('uploader');
                var filebutton = document.getElementById('fileButton');

                fileButton.addEventListener('change', function(e){
                           var file = e.target.file[0];   
                           
                           firebase.storage().ref('my-file/' + file.name);

                           var task = storageRef.put(file);

                           task.on('state_changed',
                        
                                function progress(snapshot){
                                        var percentage =( snapshot.bytesTramsferred / snapshot.totalBytes ) * 100;
                                        uploader.value = percentage;
                                },

                                function error(err){

                                },

                                function complete(){
                                    var downloadurl = task.snapshot.downloadurl;
                                        console.log(downloadurl);
                                }
                        )
                                    });
                            </script>
                                    <div class="col s12 m6">
                                 <progress value="0" max="100" id=uploader>0%</progress>
                                 <input type="file" value="uploader" id="fileButton"/>
                                 <button id="uploadButton" onclick=""uploadFile()> submit </button>
                                 </div>

@endsection