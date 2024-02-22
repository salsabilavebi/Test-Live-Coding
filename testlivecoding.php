<?php

// fungsi generate token 
function generateToken($user){

    $token = bin2hex(random_bytes(15));

    //membuat array untuk menyimpan token
    if(!isset($GLOBALS['user_tokens'])){
        $GLOBALS['user_tokens'] = [];
    }
     
    array_push($GLOBALS['user_tokens'][$user], $token);
    
    //jika token lebih dari 10 maka buang token paling atas
    
    if(count($GLOBALS['user_tokens'][$user]) > 10 ){
    
        array_shift($GLOBALS['user_tokens'][$user]);
    }

    return $token;

}

// fungsi verifikasi token 
 function VerifyToken($user, $token){

    if(isset($GLOBALS['user_tokens'][$user])){

        $index = array_search($token, $GLOBALS['user_tokens'][$user]);

        if($Index !== false){
            // maka token akan dihapus
            unset($GLOBALS['user_tokens'][$user][$index]);

            return true;
        }
    }

    return false;
 }

 $token1 = generateToken('ibnu');
 echo"Token 1 untuk ibnu: $token1\n"; 

 $token2 = generateToken('ibnu');
 echo"Token 2 untuk ibnu: $token2\n"; 

 $token3 = generateToken('ibnu');
 echo"Token 3 untuk ibnu: $token3\n"; 

$result = VerifyToken('ibnu', $token1);
if(result){

    echo"Token 1 Ibnu Valid";

}else{

    echo"Token 1 Ibnu tidak Valid";
}


$result = VerifyToken('ibnu', $token2);
if(result){

    echo"Token 2 Ibnu Valid";

}else{

    echo"Token 2 Ibnu tidak Valid";
}
?>