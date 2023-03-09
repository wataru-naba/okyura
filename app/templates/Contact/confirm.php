<?php 
$this->assign('title', 'お問い合せフォーム | ');

?>

<section class="contact">
    <div class="contact-inner">
        <h1 data-en="Contact">お問い合わせ</h1>
        <?= $this->Form->create($contact,['class'=>'form','id'=>"mail_form",'enctype'=>'multipart/form-data']);?>
            <?= $this->Form->control('confirm',['label'=>false,'type'=>'hidden','value'=>'send'])?>
            <dl class="contact-form">
                <dt><label>お名前</label><span class="required">必須</span></dt>
                <dd> 
                    <?= $this->request->getData('name')?>
                    <?= $this->Form->control('name',['label'=>false,'type'=>'hidden'])?> 
                </dd>
                <dt><label>ふりがな</label><span class="required">必須</span></dt>
                <dd> 
                    <?= $this->request->getData('kana')?>
                    <?= $this->Form->control('kana',['label'=>false,'type'=>'hidden'])?> 
                </dd>
                <dt><label>電話番号</label><span class="required">必須</span></dt>
                <dd>
                    <?= $this->request->getData('tel')?>
                    <?= $this->Form->control('tel',['label'=>false,'type'=>'hidden'])?> 
                </dd>
                <dt><label>メールアドレス</label><span class="required">必須</span></dt>
                <dd> 
                    <?= $this->request->getData('email')?>
                    <?= $this->Form->control('email',['label'=>false,'type'=>'hidden'])?> 
                </dd>
                <dt><label>お問合せ内容</label><span class="required">必須</span></dt>
                <dd>
                     <?= nl2br($this->request->getData('message'))?>
                     <?= $this->Form->control('message',['label'=>false,'type'=>'hidden'])?> 
                </dd>
                <dt><label>個人情報保護方針</label><span class="required">必須</span></dt>
                <dd>
                    同意します。
                </dd>
            </dl>
           
            <button type="submit">送信する</button>
        </form><!-- /.form--->
        
    </div>
</section>


