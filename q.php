function Get_BKN($skey){
    $len=strlen($skey);
    $hash=5381;
    for($i=0;$i<$len;$i++){
        $hash+=((($hash<<5) & 0x7fffffff)+ord($skey[$i])) & 0x7fffffff;
        $hash&=0x7fffffff;
    }
    return $hash & 0x7fffffff;
}
