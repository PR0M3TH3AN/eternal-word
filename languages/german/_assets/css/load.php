//<![CDATA[
<!-- Begin
function go_to_station() {
if (document.stationform.stationselect.options[0].selected) {
window.location.href = "multi/bible.htm";} 
else if (document.stationform.stationselect.options[1].selected) {
window.location.href = "multi/bi_cn_en.htm";}
else if (document.stationform.stationselect.options[2].selected) {
window.location.href = "multi/bi_pt_en.htm";}   
else if (document.stationform.stationselect.options[3].selected) {
window.location.href = "multi_3/bi_en_in_tr.htm";}    
else if (document.stationform.stationselect.options[4].selected) {
window.location.href = "multi/bi_en_sp.htm";}   
else if (document.stationform.stationselect.options[5].selected) {
window.location.href = "multi_5/bible.htm";}     
else if (document.stationform.stationselect.options[6].selected) {
window.location.href = "multi_4/bible.htm";}   
else if (document.stationform.stationselect.options[7].selected) {
window.location.href = "multi/bi_fr_pt.htm";}   
else if (document.stationform.stationselect.options[8].selected) {
window.location.href = "multi/bi_pt_it.htm";}        
else if (document.stationform.stationselect.options[9].selected) {
window.location.href = "multi/bi_en_it.htm";}   
else if (document.stationform.stationselect.options[10].selected) {
window.location.href = "multi/bi_en_cn_sp_it.htm";}   
else if (document.stationform.stationselect.options[11].selected) {
window.location.href = "multi/bi_en_cn_py.htm";}  
else if (document.stationform.stationselect.options[12].selected) {
window.location.href = "multi/bi_en_pt_sp_it.htm";} 
else if (document.stationform.stationselect.options[13].selected) {
window.location.href = "multi_2/bi_ru_en.htm";}  
else if (document.stationform.stationselect.options[14].selected) {
window.location.href = "multi_2/bi_en_de.htm";}  
else if (document.stationform.stationselect.options[15].selected) {
window.location.href = "multi_2/bi_ru_de.htm";}  
else if (document.stationform.stationselect.options[16].selected) {
window.location.href = "multi_2/bi_en_ru_de.htm";}  
else if (document.stationform.stationselect.options[17].selected) {
window.location.href = "multi_2/bi_en_pt_ru_de.htm";}  
return true;    
}
function textValue() {   
var stationInteger, stationString       
stationInteger=document.stationform.stationselect.selectedIndex 
stationString=document.stationform.stationselect.options[stationInteger].text   
document.stationform.stationtext.value = "Go to " + stationString +"!"
}
// End -->
//]]>




