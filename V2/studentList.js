function tableme($result){
    $header='';
    $rows='';
    while ($row = mysql_fetch_array($result)) { 
        if($header==''){
            $header.='<tr>'; 
            $rows.='<tr>'; 
            foreach($row as $key => $value){ 
                $header.='<th>'.$key.'</th>'; 
                $rows.='<td>'.$value.'</td>'; 
            } 
            $header.='</tr>'; 
            $rows.='</tr>'; 
        }else{
            $rows.='<tr>'; 
            foreach($row as $value){ 
                $rows .= "<td>".$value."</td>"; 
            } 
            $rows.='</tr>'; 
        }
    } 
    return '<table>'.$header.$rows.'</table>';
}