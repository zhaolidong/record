function Foo(){
	getName = function(){
		alert(1)
	}
	return this;
}
Foo.getName = function(){alert(2)}
Foo.prototype.getName=function(){
	alert(3)
}
var getName = function(){alert(4)}
function getName(){alert(5)}
console.log(Foo.getName());
console.log(getName());
console.log(Foo().getName())
console.log(new Foo.getName())
console.log(nwe Foo().getName())
console.log(new new Foo().getName())


