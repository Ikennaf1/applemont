<?php
use App\Models\Post;
$socials = themeGetSocials();
$contacts = themeGetContacts();
?>

<div class="w-64">
    <label class="flex flex-col gap-2">
        <div>Your title</div>
        <input class="border border-gray-400 rounded-lg w-full" type="text" name="user_title" id="" placeholder="Copywriter" value="<?= settings('r', 'applemont.user_title') ?>">
    </label>
</div>

<div class="w-64">
    <label class="flex flex-col gap-2">
        <div>Bio</div>
        <textarea class="border border-gray-400 rounded-lg w-full"name="user_bio" id="" placeholder="Short description of yourself and services"><?= settings('r', 'applemont.user_bio') ?></textarea>
    </label>
</div>

<div class="w-64">
    <label class="flex flex-col gap-2">
        <div>Call to action text</div>
        <input class="border border-gray-400 rounded-lg w-full" type="text" name="cta_text" id="" placeholder="Book me" value="<?= settings('r', 'applemont.cta_text') ?>">
    </label>
</div>

<div class="w-64">
    <label class="flex flex-col gap-2">
        <div>Featured post</div>
        <select class="border border-gray-400 rounded-lg w-full" name="featured_post">
            <?php
            $selectPost = '';
            if (empty(settings('r', 'applemont.featured_post'))) {
                $selectPost = 'selected';
            }
            ?>
            <option <?=$selectPost?> disabled>Select post</option>
            <option value="recent">Recent post</option>
            <?php
            $posts = Post::where('status', 'published')->latest()->get();
            foreach ($posts as $post) {
                $selected = $post->id == settings('r', 'applemont.featured_post')
                    ? 'selected'
                    : '';
            ?>  <option value="<?=$post->id?>" <?=$selected?>><?=$post->title?></option>
            <?php
            }
            ?>
        </select>
    </label>
</div>

<?php
foreach ($contacts as $contact => $details) {
?>
<div class="w-64">
    <label class="flex flex-col gap-2">
        <div><?= $details['name'] ?></div>
        <input class="border border-gray-400 rounded-lg w-full" type="text" name="<?= $contact ?>" id="" value="<?= settings('r', 'applemont.'.$contact) ?>">
    </label>
</div>
<?php
}

foreach ($socials as $social => $details) {
?>
<div class="w-64">
    <label class="flex flex-col gap-2">
        <div><?= $details['name'] ?></div>
        <input class="border border-gray-400 rounded-lg w-full" type="text" name="<?= $social ?>" id="" value="<?= settings('r', 'applemont.'.$social) ?>">
    </label>
</div>
<?php
}
