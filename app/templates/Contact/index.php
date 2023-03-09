<?php 
$this->assign('title', 'お問い合せフォーム | ');
$this->assign('script', '<script src="./js/formValidation.js"></script>');
?>

<section class="contact">
    <div class="contact-inner">
        <h1 data-en="Contact">お問い合わせ</h1>
        <?= $this->Form->create($contact,['class'=>'form','id'=>"f-form",'enctype'=>'multipart/form-data']);?>
            <?= $this->Form->control('confirm',['label'=>false,'type'=>'hidden','value'=>'confirm'])?>
            <dl class="contact-form">
                <dt><label>お名前</label><span class="required">必須</span></dt>
                <dd> 
                    <input type="text" id="f-name" name="name" class="f-size-5" required>
                    <span id="name_err"></span>
                </dd>
                <dt><label>ふりがな</label><span class="required">必須</span></dt>
                <dd> 
                    <input type="text" id="f-kana" name="kana" class="f-size-5" required>
                    <span id="kana_err"></span>
                </dd>
                <dt><label>電話番号</label><span class="required">必須</span></dt>
                <dd>
                    <input type="text" id="f-tel" name="tel" class="f-size-5" required>
                    <span id="tel_err"></span>    
                </dd>
                <dt><label>メールアドレス</label><span class="required">必須</span></dt>
                <dd> 
                    <input type="text" id="f-email" name="email" class="f-size-10" required>
                    <span id="email_err"></span>
                </dd>
                <dt><label>お問合せ内容</label><span class="required">必須</span></dt>
                <dd>
                    <textarea name="message" id="f-message" required></textarea>
                    <span id="message_err"></span>
                </dd>
            </dl>
            <p class="privacy">
                <input type="checkbox" id="privacyCheck">
                <label for="privacyCheck">プライバシーポリシー に同意する
                </label>
            </p>
            <button type="submit">確認画面へ</button>
        </form><!-- /.form--->
        
    </div>
</section>


