<?php
include("db.php");
if(isset($_POST["submit"]))
{
$uploadedFile = '';
    if(!empty($_FILES["file"]["type"])){
        $fileName = time().'_'.$_FILES['file']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "admin/memberregisterphoto/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }
$idproofphoto = '';
    if(!empty($_FILES["idphoto"]["type"])){
        $fileNames = time().'_'.$_FILES['idphoto']['name'];
        $valid_extensionss = array("jpeg", "jpg", "png");
        $temporarys = explode(".", $_FILES["idphoto"]["name"]);
        $file_extensions = end($temporarys);
        if((($_FILES["idphoto"]["type"] == "image/png") || ($_FILES["idphoto"]["type"] == "image/jpg") || ($_FILES["idphoto"]["type"] == "image/jpeg")) && in_array($file_extensions, $valid_extensionss)){
            $sourcePaths = $_FILES['idphoto']['tmp_name'];
            $targetPaths = "admin/idproofphoto/".$fileNames;
            if(move_uploaded_file($sourcePaths,$targetPaths)){
                $idproofphoto = $fileNames;
            }
        }
    }

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$faname=$_POST['fathername'];
$age=$_POST['age'];
$email=$_POST['email'];
$add=$_POST['address'];
$gen=$_POST['gender'];
$qul=$_POST['qulification'];
$dob=$_POST['date'];
$city=$_POST['city'];
$state=$_POST['state'];
$code=$_POST['pincode'];
$blood=$_POST['bloodgroup'];
$tel=$_POST['tel'];
$proof=$_POST['idproof'];
$proofnumber=$_POST['idnumber'];



$memberregister=mysql_query("insert into memberregister(firstname,lastname,fathername,email,address,gender,qulification,dateofbirth,age,city,state,code,bloodgroup,contact,idproof,idproofnumber,idproofphoto,photo)
values('$fname','$lname','$faname','$email','$add','$gen','$qul','$dob','$age','$city','$state','$code','$blood','$tel','$proof','$proofnumber','$idproofphoto','$uploadedFile')");
	
	
    if ($memberregister) {
    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else
{
    echo "<script type='text/javascript'>alert('failed!')</script>";
}
header('location:registration.php');
}
?>





