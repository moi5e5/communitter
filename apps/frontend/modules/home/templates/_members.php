<ul id="memberslist">
    <?php foreach($MEMBERS as $member):?>
       <?php include_partial('home/membersitem', array('member'=> $member));?>
    <?php endforeach ?>
</ul>