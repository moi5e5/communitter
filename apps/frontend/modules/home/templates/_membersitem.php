<!-- CommunityMembers $member -->

<li>
    <?php echo image_tag('picture_default.png', array('class'=>'picture_profile'))?>
    <span>
        <?php echo  link_to($member,'members/view?id='.$member->getId(), array('class'=>'symfonero')); ?> <br />
        <?php echo $member->getProfile()->getHomepage(); ?>
    </span>
</li>