<article class="post">
  <header>
    <div class="title">
      <h2><a href="<?php echo $page->permalink() ?>"><?php echo $Page->title() ?></a></h2>
      <p><?php echo $Page->description() ?></p>
    </div>
    <div class="meta">
      <time class="published" datetime="<?php echo $page->date() ?>"><?php echo $page->date() ?></time>
      <?php
        // Get the user who created the post.
        $User = $Page->user();

        // Default author is the username.
        $author = $User->username();

        // If the user complete the first name or last name this will be the author.
        if( Text::isNotEmpty($User->firstName()) || Text::isNotEmpty($User->lastName()) ) {
          $author = $User->firstName().' '.$User->lastName();
         } ?>
      <span class="category"><?php $Language->p('Category') ?>: <a href="<?php echo HTML_PATH_ROOT.$Url->filters('category').'/'.$page->categoryKey() ?>"><?php echo $page->category() ?></a></span>
      <span class="author name"><?php echo $author ?></span>
    </div>
  </header>
  <?php if( $page->coverImage() ) { ?>
          <a href="<?php echo $page->permalink() ?>" class="image featured"><img src="<?php echo $page->coverImage() ?>" alt="<?php echo $page->slug() ?>"></a>
  <?php } ?>
  <?php echo $Page->content(false) ?>
  <footer>
    <ul class="actions">
      <li></li>
    </ul>
    <ul class="stats">
      <?php
        $tags = $Page->tags(true);

        foreach($tags as $tagKey=>$tagName) {
          echo '<li><a href="'.HTML_PATH_ROOT.$Url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a></li>';
        }
      ?>
    </ul>
  </footer>
</article>