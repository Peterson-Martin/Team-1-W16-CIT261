# Team-1-W16-CIT261
Team 1-W16-CIT261
<!DOCTYPE html>
<html>
<body>

<p id="demo"></p>

<script>
function person(first, last, age, eye) {
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = eye;
}
person.prototype.name = function() {
    return this.firstName + " " + this.lastName
};

var myFather = new person("John", "Doe", 50, "blue");
document.getElementById("demo").innerHTML =
"My father is " + myFather.name(); 
</script>

</body>
</html>
