<?php
$xml="<personinfo><item><id>1</id><name>aaa</name><age>16</age></item><item><id>2</id><name>bbb</name><age>26</age></item></personinfo>";
$rss=new SimpleXMLElement($xml);
foreach($rss->item as $v){
 echo $v->name,'<br />';
}
echo $rss->item[1]->age;//读取数据
echo '<hr>';
$rss->item[1]->name='ccc';//修改数据
foreach($rss->item as $v){
 echo $v->name,' <br /> ';//aaa <br /> ccc <br />
}
echo '<hr>';
unset($rss->item[1]);//输出数据
foreach($rss->item as $k=>$v){
 echo $v->name,' <br /> ';//aaa <br />
}
echo '<hr>';
//添加数据
$item=$rss->addChild('item');
$item->addChild('id','3');
$item->addChild('name','ccc_new');
$item->addChild('age','40');
foreach($rss->item as $k=>$v){
 echo $v->name,' <br /> ';//aaa <br /> ccc_new <br />
}
$rss->asXML('personinfo.xml');
?>