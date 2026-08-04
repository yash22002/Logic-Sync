let str = "hello",i,store=0;
for(i=str.length-1;i>=0;i--){
    console.log(str[i]);
    store = store+str[i];
}
console.log(store);
