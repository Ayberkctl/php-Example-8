<?php
if(isset($_POST["submit"])){

        $kulanici_adi=$_POST["kulanici_adi"];
        $password=$_POST["password"];
        $email=$_POST["email"];

    if(!$kulanici_adi || !$password || !$email){
        $hata="lütfen kulanıcı adı şifrenizi ve email girin ";
    }
    elseif($kulanici_adi != $uye["kulanici_adi"]){
        if(isset($hata)){$hata=$hata."kulanıcı adı hatalı";}
        else{$hata="kulanıcı adı hatalı";}
    }
    elseif($password != $uye["password"]){
        if(isset($hata)){$hata=$hata."password  hatalı";}
        else{$hata="password  hatalı";}
    }
    elseif($email != $uye["email"]){
        if(isset($hata)){$hata=$hata."email  hatalı";}
        else{$hata="email  hatalı";}
    }else{
        $_SESSION["zaman"]=time()+10;
        $_SESSION["kulanici_adi"]=$uye["kulanici_adi"];
        //header()
        header("location:index.php");

    }
}
?>
<?php if(isset($hata)) :?>
    <div style="border:solid red 1px;">
       <?php echo $hata; ?>
    </div>
<?php endif;?>
<form action="" method="post">
        Kulanıcı adı: 
        <input type="text" name="kulanici_adi" > <br>
        Pasword: 
        <input type="password" name="password" ><br>
        E-mail: 
        <input type="email" name="email" id="">
        <input type="hidden" name="submit" value="1">
        <button type="submit">giriş yap</button>

</form>