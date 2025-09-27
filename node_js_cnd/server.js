const express=require ('exprees');
const app =express();
const port =3000;

app.use(express.json());

 let items=[];

 //---post

 app.post('/items',(res,req)=>{
const newItem={

id:items.length+1,
name:req.body.name,


};
items.push(newItem);

res.status(200).json(newItem);

 });
//--get
app.get('/items',(res,req)=>{

    res.json(items);

});

//--put-- 

app.put('/items:id',(res,req)=>{
const itemId=parseInt(req.params.id);
const item=items.find(i=>i.id===itemId);

if(!item){
res.status(401).json({message:'Not Found'});

}
item.name=req.name.body;
res.json(item);


});
//--delete

app.delete('/items:id',(res,req)=>{
const itemId=parseInt(req.params.id);
const itemIndex=items.findIndex(i=>i.id===itemId);

if(itemIndex===-1){
res.status(404).json({message:'Not Found'});

}
items.splice(itemIndex,1);

res.status(204).send();
});
app.listen(PORT,()=>{

console.log(`the server is running on:',${port}`);

});


