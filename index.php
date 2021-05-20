
<!-- 
github.com/kafamdakentseldonusumler
DC : KAFAMDA KENTSEL DÖNÜŞÜMLER#6577
!--->

<!DOCTYPE html>
<html lang="en">
<head>
<title>TS3PROXY</title>



 
<form action="" method="POST">

<?PHP
error_reporting(0);
$guvenlik = $_POST['g-recaptcha-response'];
$vericek=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=google secret keyiniz&response=".$guvenlik."&remoteip=".$_SERVER['REMOTE_ADDR']);
$gonder = json_decode($vericek);
if($gonder->success == true) {
$kafanagore = rand(1,3000);	
$ip = $_POST["ip"];
$port = $_POST["port"];	
$sunucuip = 'sunucu ip adresin';	
$ch = curl_init();	
curl_setopt($ch,CURLOPT_URL,"api");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$output=curl_exec($ch);
curl_close($ch);
echo '<div class="alert alert-success">Başarıyla Oluşturuldu '.$sunucuip.':'.$kafanagore.'</div>';	
}else{
echo'<div class="alert alert-danger">Lütfen Robot Olmadığınızı Doğrulayın.</div>';
}
?>  
          <div class="form-group">
            <label>İP</label>
            <input type="text" name="ip" id="ip" class="form-control" placeholder="İP Adresi" autocapitalize="off">
          </div>  	
		  
          <div class="form-group">
            <label>PORT</label>
            <input type="text" name="port" id="port" class="form-control" placeholder="Port" autocapitalize="off">
          </div>

		   <div class="form-group">
          <label>Lokasyon</label> 
                <select name="lokasyon" class="form-control" id="lokasyon">
                                   <option value="Türkiye">Türkiye</option>
                                  
                                </select>
           </div>

		  
<center><div class="g-recaptcha" data-sitekey="google site keyiniz"></div>
		 
          <BR><div class="form-group">
            <button type="submit" class="btn btn-success btn-block">
              Proxy Oluştur
            </button>
          </div>		  
  
  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- 
* github.com/kafamdakentseldonusumler
!--->
