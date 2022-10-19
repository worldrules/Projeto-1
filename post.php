<?php include_once('./templates/header.php');

if (isset($_GET['id'])) {

  $postId = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {

    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}

?>

<main id="post-container">
  <div class="content-container">
    <h1 id="main-title">
      <?= $currentPost['title'] ?>
    </h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
  </div>
  <p class="post-content">
    Cillum proident nulla mollit occaecat nostrud nisi nostrud magna voluptate est velit commodo. Incididunt sint ex tempor irure aute consectetur nostrud sunt sint. Sunt anim duis dolore sint adipisicing. Ad ad do fugiat consectetur sunt incididunt do Lorem consequat duis anim est.

    Officia eiusmod ullamco eiusmod ex labore labore. Est fugiat occaecat minim labore sunt magna nulla ex adipisicing irure. Minim consequat nisi Lorem eu amet voluptate adipisicing et consequat ex. Aliquip culpa nisi laborum elit eiusmod fugiat amet quis voluptate do elit. Ullamco est ipsum dolore ea enim.

    Nulla reprehenderit culpa excepteur incididunt sunt sit. Eu in officia magna irure. Nulla est pariatur velit cupidatat laborum eiusmod voluptate ex. Amet ut deserunt voluptate quis elit aute duis dolore aliquip consectetur. Anim laborum ullamco consectetur proident consectetur commodo commodo elit sunt commodo laborum esse eu. Nostrud minim duis consectetur laborum non sit Lorem ex elit dolore ea do fugiat culpa. Dolor nostrud minim ad non duis nostrud velit tempor.

    Proident laboris cupidatat dolor quis cillum eu. Quis nisi nulla ut proident dolore ullamco deserunt sit sint sint ullamco. Nisi exercitation ullamco non irure ad aliqua ut nostrud tempor dolor. Tempor ea officia sit duis id magna magna minim labore officia nulla consequat. Deserunt cupidatat reprehenderit incididunt esse quis commodo tempor. Id ea consequat mollit sit.

    Aliquip quis labore ullamco in laborum nulla mollit. Duis est laborum do aliquip id eiusmod mollit ipsum irure. Minim occaecat aliqua consequat sunt est amet reprehenderit pariatur labore duis fugiat sunt pariatur. Irure ipsum deserunt dolore id. Cillum eu do duis ea tempor voluptate.
  </p>
</main>
<aside id="nav-container">
  <h3 id="tags-title">Tags</h3>
  <ul id="tag-list">
    <?php foreach ($currentPost['tags'] as $tag) : ?>
      <li><a href="#"><?= $tag ?></a></li>
    <?php endforeach ?>
  </ul>
  <h3 id="categories-title">Categorias</h3>
  <ul id="categories-list">
    <?php foreach ($categories as $category) : ?>
      <li><a href="#"><?= $category ?></a></li>
    <?php endforeach; ?>
  </ul>
</aside>
<?php
include_once("templates/footer.php")
?>