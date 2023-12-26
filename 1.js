let no=[12,4,56,21,7];
greatest=no[0];

for(let i=0;i<=no.length;i++){
   if(no[i]>greatest){
      greatest=no[i];
   }
}
console.log("the greatest no is "+greatest);