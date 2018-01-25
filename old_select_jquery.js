$(document).ready(function() {
// Initializing arrays with subject names.
var Sem_1 = [{
display: "FODE",value: "FODE"},
{display: "English", value: "English"},
{display: "Maths",value: "Maths"},
{display: "C Programming",value: "C"}
];
var Sem_2 = [{
display: "CPD",value: "CPD"},
{display: "BE",value: "BE"},
{display: "Advanced Maths",value: "Advanced Maths"},
{display: "Advanced C Programming",value: "Advanced C Programming"}
];
var Sem_3 = [{
display: "VB .Net",value: "VB"},
{display: "C++",value: "C++"},
{ display: "DBMS",value: "DBMS"},
{display: "DS", value: "DS"},
{display: "OS", value: "OS"}];
var Sem_4 = [{
display: "CN",value: "CN"},
{display: "ADBMS",value: "ADBMS"},
{ display: "COA",value: "COA"},
{display: "DS", value: "DS"}];
var Sem_5 = [{
display: "CNS",value: "CNS"},
{display: "C++",value: "C++"},
{ display: "DBMS",value: "DBMS"},
{display: "DS", value: "DS"}];
var Sem_6 = [{
display: "AJP",value: "AJP"},
{display: "PPUD",value: "PPUD"},
{ display: "MCAD",value: "MCAD"},
{display: "NMA", value: "NMA"}];
// Function executes on change of first select option field.
$("#semester").change(function() {
var select = $("#semester option:selected").val();
switch (select) {
case "Sem_1":
subject(Sem_1);
break;
case "Sem_2":
subject(Sem_2);
break;
case "Sem_3":
subject(Sem_3);
break;
case "Sem_4":
subject(Sem_4);
break;
case "Sem_5":
subject(Sem_5);
break;
case "Sem_6":
subject(Sem_6);
break;
default:
$("#subject").empty();
$("#subject").append("<option>--Select--</option>");
break;
}
});
// Function To List out subject in Second Select tags
function subject(arr) {
$("#subject").empty(); //To reset subject
$("#subject").append("<option>--Select--</option>");
$(arr).each(function(i) { //to list subject
$("#subject").append("<option value=\"" + arr[i].value + "\">" + arr[i].display + "</option>")
});
}
});