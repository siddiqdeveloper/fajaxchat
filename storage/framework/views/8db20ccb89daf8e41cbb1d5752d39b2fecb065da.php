
<?php
    use App\Index;

$indexpage= Index::where('id','1')->first();
$url1 = '/';

if($indexpage->cate1=='freefinance'){
$url1 = '/free-finance';
}else if( $indexpage->cate1 == 'OFFERS'){
$url1 = '/offers';
}else{
$url1 = '/category/'.$indexpage->cate1;
}

if($indexpage->cate1=='contact'){
$url1 = '/contact';
}

$url2 = '/';

if($indexpage->cate2=='freefinance'){
$url2 = '/free-finance';
}else if( $indexpage->cate2 == 'OFFERS'){
$url2 = '/offers';
}else{
$url2 = '/category/'.$indexpage->cate2;
}


if($indexpage->cate2=='contact'){
$url2 = '/contact';
}


?>
    <div class="banner-section section mt-30">
        <div class="container">
            
            <div class="row row-10 mb-50">
                <div class="col-md-6 col-12 mb-30">
                <div class="banner"><a href="<?php echo e($url1); ?>" class="onepage"><img src="<?php echo e($indexpage->bgimage); ?>" alt="Banner"></a></div>
            </div>
            <div class="col-md-6 col-12 mb-30">
                <div class="banner"><a href="<?php echo e($url2); ?>" class="onepage"><img src="<?php echo e($indexpage->bgimageallurl); ?>" alt="Banner"></a></div>
            </div>
            </div>
        </div>
    </div>        
<?php /**PATH C:\wamp64\www\example-app\resources\views/ad.blade.php ENDPATH**/ ?>