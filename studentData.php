<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="thusara">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Econ Department Student Managemnt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
        #second,
        #third,
        #fourth,
        #result {
            display: none;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light p-4 rounded mt-4">
                <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">Econ Dept Student Data Form</h5>
                <div class="progress mb-3" style="height:40px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width:40%;" id="progressBar">
                        <b class="lead" id="progressText">Step-1</b>
                    </div>
                </div>
                <form action="" method="post" id="form-data">
                    <div id="first">
                        <h4 class="text-center bg-primary p-1 rounded text-light">Personal Information</h4>
                        <div class="form-group">
                            <input type="text" name="regNumber" class="form-control" placeholder="Registration Number">
                        </div>
                        <div class="form-group">
                            <input type="text" name="firstName" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="lastName" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="dob" class="form-control" placeholder="Date of Birth(mm/dd/yyyy)">
                        </div>
                        <div class="form-group">
                            <select name="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="district" class="form-control">
                                <option value="Ampara">Ampara</option>
                                <option value="Anuradhapura">Anuradhapura</option>
                                <option value="Badulla">Badulla</option>
                                <option value="Batticaloa">Batticaloa</option>
                                <option value="Colombo">Colombo</option>
                                <option value="Galle">Galle</option>
                                <option value="Gampaha">Gampaha</option>
                                <option value="Hambantota">Hambantota</option>
                                <option value="Jaffna">Jaffna</option>
                                <option value="Kalutara">Kalutara</option>
                                <option value="Kandy">Kandy</option>
                                <option value="Kegalle">Kegalle</option>
                                <option value="Kilinochchi">Kilinochchi</option>
                                <option value="Kurunegala">Kurunegala</option>
                                <option value="Mannar">Mannar</option>
                                <option value="Matale">Matale</option>
                                <option value="Matara">Matara</option>
                                <option value="Monaragala">Monaragala</option>
                                <option value="Mullaitivu">Mullaitivu</option>
                                <option value="Nuwara Eliya">Nuwara Eliya</option>
                                <option value="Polonnaruwa">Polonnaruwa</option>
                                <option value="Puttalam">Puttalam</option>
                                <option value="Ratnapura">Ratnapura</option>
                                <option value="Trincomalee">Trincomalee</option>
                                <option value="Vavuniya">Vavuniya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="permAddress" placeholder="Permenant Address" class="form-control"></textarea>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="numBrother" class="form-control" placeholder="Number of Brothers">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="numSister" class="form-control" placeholder="Number of Sisters">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="stdTeleNumber" class="form-control" placeholder="Telephone Number">
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn btn-danger" id="next-1">Next</a>
                        </div>
                    </div>
                    <div id="second">
                        <h4 class="text-center bg-primary p-1 rounded text-light">Parents Information</h4>
                        <h5 class="text-center bg-info rounded text-light">Mother's Details</h5>
                        <div class="form-group">
                            <input type="text" name="motherName" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="motherEduLevel" class="form-control" placeholder="Education Level">
                        </div>
                        <div class="form-group">
                            <input type="text" name="motherOccupation" class="form-control" placeholder="Occupation">
                        </div>
                        <div class="form-group">
                            <input type="text" name="motherTeleNum" class="form-control" placeholder="Telephone Number">
                        </div>
                        <h5 class="text-center bg-info rounded text-light">Father's Details</h5>
                        <div class="form-group">
                            <input type="text" name="fatherName" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="fatherEduLevel" class="form-control" placeholder="Education Level">
                        </div>
                        <div class="form-group">
                            <input type="text" name="fatherOccupation" class="form-control" placeholder="Occupation">
                        </div>
                        <div class="form-group">
                            <input type="text" name="fatherTeleNum" class="form-control" placeholder="Telephone Number">
                        </div>
                        <h5 class="text-center bg-info rounded text-light">Contacted Person's Details</h5>
                        <div class="form-group">
                            <input type="text" name="contactPersonName" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <textarea name="contactPersonAddress" placeholder="Address" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" name="contactPersonTeleNum" class="form-control" placeholder="Telephone Number">
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn btn-danger" id="prev-2">Previous</a>
                            <a href="#" class="btn btn-danger" id="next-2">Next</a>
                        </div>
                    </div>
                    <div id="third">
                        <h4 class="text-center bg-primary p-1 rounded text-light">Education Information</h4>
                        <h5 class="text-center bg-info rounded text-light">Advance Level Result</h5>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="sub1" class="form-control" placeholder="Subject Name">
                            </div>
                            <div class="form-group col-md-6">
                                <select name="grade1" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="S">S</option>
                                    <option value="F">F</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="sub2" class="form-control" placeholder="Subject Name">
                            </div>
                            <div class="form-group col-md-6">
                                <select name="grade2" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="S">S</option>
                                    <option value="F">F</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="sub3" class="form-control" placeholder="Subject Name">
                            </div>
                            <div class="form-group col-md-6">
                                <select name="grade3" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="S">S</option>
                                    <option value="F">F</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">General English</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="grade1" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="S">S</option>
                                    <option value="F">F</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn btn-danger" id="prev-3">Previous</a>
                            <a href="#" class="btn btn-danger" id="next-3">Next</a>
                        </div>
                    </div>
                    <div id="fourth">
                        <h4 class="text-center bg-primary p-1 rounded text-light">Future Goals</h4>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-control">Prospected Job Category</label>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="prosJobCat" class="form-control">
                                    <option value="Government">Government</option>
                                    <option value="Private">Private</option>
                                    <option value="Self Employee">Self Employee</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="prosJobField" class="form-control" placeholder="Prospected Job Field">
                        </div>
                        <div class="form-group">
                            <input type="text" name="prosJob" class="form-control" placeholder="Prospected Job">
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn btn-danger" id="prev-4">Previous</a>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js" integrity="sha256-ugED92WALymbx9ylw12aADWaCrsQysE29DyvnAv5i3w=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#next-1").click(function(){
                $("#second").show();
                $("#first").hide();
                $("#progressBar").css("width","60%");
                $("#progressText").html("step-2");
            })

            $("#next-2").click(function(){
                $("#second").hide();
                $("#third").show();
                $("#progressBar").css("width","80%");
                $("#progressText").html("step-3");
            })

            $("#next-3").click(function(){
                $("#third").hide();
                $("#fourth").show();
                $("#progressBar").css("width","100%");
                $("#progressText").html("step-4");
            })

            $("#prev-2").click(function(){
                $("#second").hide();
                $("#first").show();
                $("#progressBar").css("width","40%");
                $("#progressText").html("step-1");
            })

            $("#prev-3").click(function(){
                $("#second").show();
                $("#third").hide();
                $("#progressBar").css("width","60%");
                $("#progressText").html("step-2");
            })

            $("#prev-4").click(function(){
                $("#fourth").hide();
                $("#third").show();
                $("#progressBar").css("width","80%");
                $("#progressText").html("step-3");
            })
        })
    </script>
</body>

</html>

