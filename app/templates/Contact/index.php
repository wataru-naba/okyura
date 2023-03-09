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
            <div class="privacyPoricy">
                <div class="inner">
                    <ul class="list-icon-kuro">
                        <li><strong>個人情報保護方針</strong>
                            <p class="m-t-10 m-b-15">オキュコンタクト（以下当施設）では、お客様及び当施設に関わる全ての方の個人に関する情報（以下「個人情報」という）の保護について、細心の注意を払って参ります。<br/>お客様に当施設のサービスを安心してご利用いただくために、以下の通り「個人情報保護方針」を定めます。</p>
                            <p class="m-t-10 m-b-15">
                                個人情報の取得について<br/>
                                当施設は、適法かつ公正な手段によって、個人情報を取得致します。<br/>
                                個人情報の利用について<br/>
                                当施設は、個人情報を取得の際に示した利用目的の範囲内で、業務の遂行上必要な限りにおいて利用し、目的外利用を行うことはありません。<br/>
                                個人情報の第三者提供について<br/>
                                当施設は、法令に定める場合を除き、個人情報を事前に本人の同意を得ることなく、第三者に提供することはありません。<br/>
                                個人情報の適正管理について<br/>
                                当施設は、個人情報の正確性を保ち、これを安全に管理致します。<br/>
                                個人情報の開示・訂正・利用停止・削除等について<br/>
                                当施設は、お客様が自己の個人情報について、開示・訂正・利用停止・削除等を求める権利を有していることを確認し、これらの要求があった場合には速やかに対応致します。<br/>
                                法令・規範の遵守<br/>
                                当施設では、個人情報の取り扱いに関する法令、国が定める指針及びその他の規範を遵守致します。<br/>
                            </p>
                        </li>
                    </ul>
                </div>
            </div><!--/yoyaku_privacy-->
            <p class="privacy">
                <input type="checkbox" id="privacyCheck" required>
                <label for="privacyCheck">個人情報保護方針に同意する
                </label>
            </p>
            <button type="submit">確認画面へ</button>
        </form><!-- /.form--->
        
    </div>
</section>


