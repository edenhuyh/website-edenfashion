const express=require('express');
var app = express();
var router1 =require('./apiRouter.js');
var router2 =express.Router()
app.use(express.json());

const products=[
    { id: 1, product_id:'1-ÁO KHOÁC NGẮN MẶC HAI MẶT.', size_id: '1-S', color_id:'2-Đen', img_id:' ' ,discount_id:'',price:'200000', qty:'1',status:'Còn Hàng', created_at:'27-22-2022',update_at:'28-11-2022'},
    { id: 2, product_id:'1-QUẦN KAKI .', size_id: '1-S', color_id:'2-Đen', img_id:' ' ,discount_id:'',price:'200000', qty:'1',status:'Còn Hàng', created_at:'27-22-2022',update_at:'28-11-2022'},
    { id: 3, product_id:'1-ÁO KHOÁC JEAN.', size_id: '1-S', color_id:'2-Đen', img_id:' ' ,discount_id:'',price:'200000', qty:'1',status:'Còn Hàng', created_at:'27-22-2022',update_at:'28-11-2022'},
    

]

const employees=[
    {id: 1,role_id:'3-Admin',email:'huynhtaitri@gmail.com',employee_password: 'huynhtaitri',fullname:'Huỳnh Tài Trí',cccd:'343928475831',phone:'09999999989',address:'19 Nguyễn Hữu Thọ, TP HCM',created_at:'2022-11-28 05:42:12',updated_at:'2022-11-28 05:42:12',deleted:'0',},
    {id: 2,role_id:'3-QT Website',email:'huynhcongchanh@gmail.com',employee_password: 'huynhcongchanh',fullname:'Huỳnh Công Chánh',cccd:'849204858623',phone:'0777970194',address:'19 Nguyễn Hữu Thọ, TP HCM',created_at:'2022-11-28 05:42:12',updated_at:'2022-11-28 05:42:12',deleted:'0',},
    {id: 3,role_id:'3-QT Kho',email:'hotrongnghia@gmail.com',employee_password: 'hotrongnghia',fullname:'Hồ Trọng Nghĩa',cccd:'438495618351',phone:'0834759619',address:'19 Nguyễn Hữu Thọ, TP HCM',created_at:'2022-11-28 05:42:12',updated_at:'2022-11-28 05:42:12',deleted:'1',},
]


const deliverys=[
    {id:1, order_id:'KG01',pstatus:'đã giao hàng',created_at:'2022-11-01 05:29:30',updated_at:'2022-11-03 05:29:30', total:'300000'},
    {id:2, order_id:'KG02',pstatus:'đang giao hàng',created_at:'2022-11-28 05:29:30',updated_at:'2022-11-30 05:29:30',total:'500000'},
    {id:3, order_id:'KG03',pstatus:'đã giao hàng',created_at:'2022-10-28 05:29:30',updated_at:'2022-11-01 05:29:30',total:'900000'},
    
]

const  promos=[
    {id:1,pdetail_id:'1-còn hàng',code:'km1', exp:'2022-10-28 05:26:58',created_at:'2022-10-20 05:26:58',updated_at:'2022-10-25 05:26:58'},
    {id:2,pdetail_id:'2-hết hàng',code:'km2', exp:'2022-11-28 05:26:58',created_at:'2022-11-20 05:26:58',updated_at:'2022-11-25 05:26:58'},
    {id:3,pdetail_id:'1-còn hàng',code:'km3', exp:'2022-12-28 05:26:58',created_at:'2022-12-20 05:26:58',updated_at:'2022-12-25 05:26:58'},
   

]



// =====API-product========================================
app.get('/kientruchuongdchvu_final/user/products.php', (req,res)=>{
    res.send(products);
});



app.get('/kientruchuongdchvu_final/user/products/:id.php', (req,res)=>{
    const product =products.find(products=>products.id === parseInt(req.params.id))
    if(!product) res.status(404).send('sản phẩm không tồn tại')
    res.send(product);
});


app.post('/kientruchuongdchvu_final/user/products/add.php', (req,res)=>{
    const product={
        id  : req.body.id,
       product_id :req.body.product_id,
       size_id :req.body.size_id, 
       color_id :req.body.color_id, 
       img_id : req.body.img_id ,
      discount_id :req.body.discount_id,
       price :req.body.price, 
       qty :req.body.qty,
       status :req.body.status, 
       created_at :req.body.created_at,
       update_at :req.body.update_at,
   }
   products.push(product)
   res.send(JSON.stringify({
    success: true,
    notice:"Thêm sản phẩm thành công",
    data:products
   }))
});


app.put('/kientruchuongdchvu_final/user/products/edit/:id.php', (req,res)=>{
    const product =products.find(products=>products.id === parseInt(req.params.id))
    product.product_id=req.body.product_id,
    product.size_id =req.body.size_id, 
    product.color_id =req.body.color_id, 
    product.img_id = req.body.img_id ,
    product.discount_id=req.body.discount_id,
    product.price =req.body.price, 
    product.qty =req.body.qty,
    product.status =req.body.status, 
    product.created_at =req.body.created_at,
    product.update_at =req.body.update_at,
    res.send(JSON.stringify({
        success: true,
        notice:"Cập nhật sản phẩm thành công",
        data:products
       }))
});

app.delete('/kientruchuongdchvu_final/user/products/delete/:id.php', (req,res)=>{
    const product =products.find(products=>products.id === parseInt(req.params.id))
   let index =products.indexOf(product);
   products.splice(index,1);
    res.send(JSON.stringify({
        success: true,
        notice:"xoá sản phẩm thành công",
        data:products
       }))
});


// ===========API- employee============================
app.get('/kientruchuongdchvu_final/user/employees.php', (req,res)=>{
    res.send(employees);
});


app.get('/kientruchuongdchvu_final/user/employees/:id.php', (req,res)=>{
    const employee =employees.find(employees=>employees.id === parseInt(req.params.id))
    if(!employee) res.status(404).send('không tìm thấy nhân viên')
    res.send(employee);
});


app.post('/kientruchuongdchvu_final/user/employees/add.php', (req,res)=>{
    const employee={
        id: req.body.id,
        role_id:req.body.role_id,
        email:req.body.email,
        employee_password: req.body.employee_password,
        fullname:req.body.fullname,
        cccd:req.body.cccd,
        phone:req.body.phone,
        address:req.body.address,
        created_at:req.body.created_at,
        updated_at:req.body.updated_at,
        deleted:req.body.deleted,
   }
   employees.push(employee)
   res.send(JSON.stringify({
    success: true,
    notice:"Thêm nhân viên thành công",
    data:employees
   }))
});


app.put('/kientruchuongdchvu_final/user/employees/edit/:id.php', (req,res)=>{
    const employee =employees.find(employees=>employees.id === parseInt(req.params.id))
    employee.role_id=req.body.role_id,
    employee.email=req.body.email,
    employee.employee_password= req.body.employee_password,
    employee.fullname=req.body.fullname,
    employee.cccd=req.body.cccd,
    employee.phone=req.body.phone,
    employee.address=req.body.address,
    employee.created_at=req.body.created_at,
    employee.updated_at=req.body.updated_at,
    employee.deleted=req.body.deleted,
    res.send(JSON.stringify({
        success: true,
        notice:"Cập nhật nhân viên thành công",
        data:employees
       }))
});

app.delete('/kientruchuongdchvu_final/user/employees/delete/:id.php', (req,res)=>{
    const employee =employees.find(employees=>employees.id === parseInt(req.params.id))
   let index =employees.indexOf(employee);
   employees.splice(index,1);
    res.send(JSON.stringify({
        success: true,
        notice:"xoá nhân viên thành công",
        data:employees
       }))
});




// =====API- delivery=======================================================

app.get('/kientruchuongdchvu_final/user/deliverys.php', (req,res)=>{
    res.send(deliverys);
});


app.get('/kientruchuongdchvu_final/user/deliverys/:id.php', (req,res)=>{
    const delivery =deliverys.find(deliverys=>deliverys.id === parseInt(req.params.id))
    if(!delivery) res.status(404).send('không tìm thấy san phẩm cần giao')
    res.send(delivery);
});


app.post('/kientruchuongdchvu_final/user/deliverys/add.php', (req,res)=>{
    const delivery={
        id:req.body.id,
        order_id:req.body.order_id,
        pstatus:req.body.pstatus,
        created_at:req.body.created_at,
        updated_at:req.body.updated_at,
        total:req.body.total
   }
   deliverys.push(delivery)
   res.send(JSON.stringify({
    success: true,
    notice:"Thêm đơn hàng vận chuyển thành công",
    data:deliverys
   }))
});


app.put('/kientruchuongdchvu_final/user/deliverys/edit/:id.php', (req,res)=>{
    const delivery =deliverys.find(deliverys=>deliverys.id === parseInt(req.params.id))
  

    delivery.order_id=req.body.order_id,
    delivery.pstatus=req.body.pstatus,
    delivery.created_at=req.body.created_at,
    delivery.updated_at=req.body.updated_at,
    delivery.total=req.body.total
    res.send(JSON.stringify({
        success: true,
        notice:"Cập nhật thông tin giao hàng thành công",
        data:deliverys
       }))
});

app.delete('/kientruchuongdchvu_final/user/deliverys/delete/:id.php', (req,res)=>{
    const delivery =deliverys.find(deliverys=>deliverys.id === parseInt(req.params.id))
   let index =deliverys.indexOf(delivery);
   deliverys.splice(index,1);
    res.send(JSON.stringify({
        success: true,
        notice:"xoá đơn vận chuyển thành công",
        data:deliverys
       }))
});


//=========API promos==========


app.get('/kientruchuongdchvu_final/user/promos.php', (req,res)=>{
    res.send(promos);
});


app.get('/kientruchuongdchvu_final/user/promos/:id.php', (req,res)=>{
    const promo =promos.find(promos=>promos.id === parseInt(req.params.id))
    if(!promo) res.status(404).send('không tìm thấy thông tin khuyến mãi')
    res.send(promo);
});


app.post('/kientruchuongdchvu_final/user/promos/add.php', (req,res)=>{
    const promo={
        id:req.body.id ,
        pdetail_id:req.body.pdetail_id ,
        code:req.body.code , 
        exp:req.body.exp ,
        created_at:req.body.created_at ,
        updated_at:req.body.updated_at 
   }
   promos.push(promo)
   res.send(JSON.stringify({
    success: true,
    notice:"Thêm mã khuyến mãi thành công",
    data:promos
   }))
});


app.put('/kientruchuongdchvu_final/user/promos/edit/:id.php', (req,res)=>{
    const promo =promos.find(promos=>promos.id === parseInt(req.params.id))
  
   
    promo.pdetail_id=req.body.pdetail_id ,
    promo.code=req.body.code , 
    promo.exp=req.body.exp ,
    promo.created_at=req.body.created_at ,
    promo.updated_at=req.body.updated_at 
    res.send(JSON.stringify({
        success: true,
        notice:"Cập nhật thông tin khuyến mãi thành công",
        data:promos
       }))
});

app.delete('/kientruchuongdchvu_final/user/promos/delete/:id.php', (req,res)=>{
    const promo =promos.find(promos=>deliverys.id === parseInt(req.params.id))
   let index =promos.indexOf(promo);
   promos.splice(index,1);
    res.send(JSON.stringify({
        success: true,
        notice:"xoá mã khuyến mãi thành công",
        data:promos
       }))
});




app.listen(8080,()=>{
console.log('Server started on port');
}
);