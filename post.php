<?php 
    include_once("templates/header.php");

    //print_r($_GET['id']);

    if(($_GET['id'])){

        $postId = $_GET['id'];
        //echo $postId;
        $currentPost;
        //echo "<br>";

        foreach($posts as $post){

            if($post['id'] == $postId){
                //echo $post['id'];
                $currentPost = $post;
                //print_r($currentPost) ;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title">
            <?php echo $currentPost['title'];?>
        </h1>
        <p id="post-description">
            <?php echo $currentPost['description']; ?>
        </p>
        <div class="img-conrtainer">
            <img src="<?php $BASE_URL?>img/<?php  echo $currentPost['img']?>" alt="<?php echo $currentPost['title'];?>">
        </div>
        <p class="post-content">
        <?php echo $currentPost['texto'];?>
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3> 
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
               <li> <a href="#"><?php echo $tag ?></a></li>
            <?php endforeach; ?>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
               <li> <a href="#"><?php echo $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
</body>
</html>

<?php 
    include_once("templates/footer.php");
?>

