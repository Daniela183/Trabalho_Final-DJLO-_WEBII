<?php
require('fpdf.php');
include_once('../classes/manipuladados.php');
function convert($String){
    return iconv("UTF-8","ISO8859-1", $String);

}
$pdf = new FPDF("L","pt","A4");
$busca = new manipuladados();
$busca->setTable("tb_evento");
//$busca->setTable("tb_aluno");
$linha = $busca->getAllDataTable();
$resultado = $busca->getAllDataTable();
 //inicial
$pdf->AddPage();
$pdf->Image("img/certificad.png", 0,0,$pdf->GetPageWidth(), $pdf->GetPageHeight());
$pdf->SetFont('Arial','',16);
$pdf->Ln(103); //pula linha

//$pdf->Cell(20,10,'Produtos');
$pdf->Ln(30); //pula linha

foreach ($linha as $dados) {

$pdf->Ln(10);

//$pdf->MultiCell(2200,10, utf8_decode($dados["titulo"]).$dados["descricao"].$dados(["dia"]).$dados(["hotas"]));


}
$pdf->Ln(30);
//$pdf->Cell(10,10,'Soma  dos valores:  R$');
//$i = 0;
/*foreach ($linha as $dados) {

$pdf->Ln(-0.4);
$i = $i + $dados["valor"];

}*/

$pdf->SetX(200);
//$pdf->MultiCell(1000,10, $i);

//Verso
$pdf->AddPage();
$pdf->Image("img/certificado.png", 0,0,$pdf->GetPageWidth(), $pdf->GetPageHeight());
$pdf->SetFont('Arial','',16);
$pdf->Ln(103); //pula linha

//$pdf->Cell(20,10,'Produtos');
$pdf->Ln(30); //pula linha

foreach ($linha as $dados) {

$pdf->Ln(10);

//$pdf->MultiCell(2200,10, utf8_decode($dados["titulo"])/*.$dados["descricao"].$dados(["dia"]).$dados(["hotas"])*/);


}
 //cabeçalho da tabela 
 $pdf->SetFont('arial','B',14);
 $pdf->Cell(585,20,utf8_decode('Título'),1,0,"C");
 $pdf->Cell(200,20,'Horas',1,1,"C");
 $soma =0;
while($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
   
    $pdf->SetFont('arial','I',12);
    $pdf->Cell(585,20,utf8_decode($linha["titulo"]),1,0,"L");
    $pdf->Cell(200,20,$linha["horas"],1,1,"R");
    $soma = $soma+$linha["horas"];

    
}

$pdf->SetFont('arial','B',14);
$pdf->Cell(585,20,"TOTAL",1,0,"L");
$pdf->Cell(200,20,$soma,1,1,"R");
$pdf->Ln(30);

//$pdf->Cell(10,10,'Soma  dos valores:  R$');
//$i = 0;
/*foreach ($linha as $dados) {

$pdf->Ln(-0.4);
$i = $i + $dados["valor"];

}*/

$pdf->SetX(200);
//$pdf->MultiCell(1000,10, $i);

$pdf->Output("I","certificado.pdf",true);
?>
