



String newFunction(){
int a= 25;
double t=55;

bool istrue=true;

var addition= a+t;
print('the addition is$addition');

var multiplication=a*t;

print('the product is"$multiplication' );
var sub=a-t;
print ('the substraction is".$sub');


if(a>t){
  print('the greatest number is $a');
}
else{

  print('the greatest number is $t');
}

return   'addition is $addition,substraction is $sub,multiplication is $multiplication';


}

// the program roots
void main(){

var result=newFunction();
print('the output is $result');

}