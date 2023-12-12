<!DOCTYPE html>
<html>
  <head>
    <title>Efek Mengetik Text | HTML, CSS, JAVASCRIPT</title>
  </head>
  <body>

    <div id="text">

    </div>

<script>
  var i=0,text;
  text = "Selamat Datang di MuhdannyBlog!! Enjoy......"

  function ketik() {
    if(i<text.length){
      document.getElementById("text").innerHTML += text.charAt(i);
      i++;
      setTimeout(ketik,80);
    }
  }
  ketik();
  function ketik2() {
    if(i>text.length){
      document.getElementById("text").innerHTML += text.charAt(i);
      i--;
      setTimeout(ketik,80);
    }
  }
  ketik2();

</script>


  </body>
</html>
<style>
    #text{
  color: red;
  font-size: 40px;
  text-align: center;
  margin-top: 300px;
  text-transform: uppercase;
  font-family: "Arial Black";
  font-weight: 700;
}
</style>
<script>
</script>

<?php $__env->startSection('atas'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tengah'); ?>
<?php $__currentLoopData = $pp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
$str = $p->pesan;
$ping=(explode(" ",$str));
$find = $ping[0];
$replace =("");
$arr = $ping[0];
$like1=(str_replace($find,$replace,$arr));
$s1=(" ");
$find = $ping[0];
$replace =("");
$arr = array($ping[1],$ping[2],$ping[3]);
$like2=implode(" ",str_replace($find,$replace,$arr));
$find = $ping[4];
$replace =("");
$arr = array($ping[5],$ping[6],$ping[7]);
$like3=implode(" ",str_replace($find,$replace,$arr));
$find = $ping[12];
$replace =("");
$arr = array($ping[9],$ping[10],$ping[11]);
$like4=implode(" ",str_replace($find,$replace,$arr));
$find = $ping[15];
$replace =("");
$arr = array($ping[13],$ping[14]);
$like5=implode(" ",str_replace($find,$replace,$arr));
?>
<div style="margin-top:10%"></div>
<span style="background-color:aliceblue;border:2px solid grey;padding:30px;text-align:center;margin-left:20%;margin-top:50%;border-radius:10px;"><?php echo e($like1); ?><img src="<?php echo e(URL('data_file/1.png')); ?>" width="25px" ><?php echo e($s1); ?><?php echo e($like2); ?><?php echo e($s1); ?><img src="<?php echo e(URL('data_file/2.png')); ?>" width="25px" ><?php echo e($s1); ?>

<?php echo e($like3); ?><?php echo e($s1); ?><img src="<?php echo e(URL('data_file/3.png')); ?>" width="25px" ><?php echo e($s1); ?><?php echo e($like4); ?><?php echo e($s1); ?><img src="<?php echo e(URL('data_file/4.png')); ?>" width="25px" ><?php echo e($s1); ?>

<?php echo e($like5); ?><?php echo e($s1); ?><img src="<?php echo e(URL('data_file/5.png')); ?>" width="25px" ></span>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('arin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba2\resources\views/chat.blade.php ENDPATH**/ ?>