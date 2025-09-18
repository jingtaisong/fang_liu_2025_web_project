<link rel="stylesheet" href="./css/font.css">
<link rel="stylesheet" href="./css/xadmin.css">
<script type="text/javascript" src="./lib/layui/layui.js" charset="utf-8"></script>
<script type="text/javascript" src="./js/xadmin.js"></script>
<script>layui.use(['form', 'layer','jquery'],
function() {
$ = layui.jquery;
var form = layui.form,
layer = layui.layer;
layer.alert('Execution success!', {icon:6},
function() {
xadmin.close(); 
xadmin.father_reload();
} )
});
</script>