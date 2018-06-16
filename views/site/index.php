<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
use yii\bootstrap\Dropdown;

$this->title = 'ПАНСЬКА ВТІХА';
?>
<div class="site-index">
    <div class="body-content">
        <div class="application">
            <div class="application-blur"></div>
            <div class="application-bg"></div>
            <div class="application-content">
                <h2><b>ДОВЕРЬТЕ ПРОВЕДЕНИЕ ВАШЕГО ПРАЗДНИКА НАМ!</b></h2>
                <div class="application-description">
                    <p>
                        Ваш праздник на нашем теплоходе станет самым незабываемым для вас и ваших гостей.<br>
                        Насладитесь праздником во время прогулки по Десне и Днепру
                    </p>
                </div>
                <br>
                <?php $form = ActiveForm::begin(); ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 application-form">
                        <?= $form->field($model, 'ship')->dropdownList(['Cuba Libre'], ['prompt'=>'Выбрать теплоход',
                        'class' => 'application-form-input'])->label(false) ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 application-form">
                        <?= $form->field($model, 'event')
                        ->dropdownList(['Турне','Вечеринка','День рождения','Корпоратив','Свадьба','Прогулка'], ['prompt'=>'Мероприятие',
                        'class' => 'application-form-input'])->label(false) ?>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 label-date application-form">
                        с
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 application-form">
                        <?= $form->field($model, 'datefrom')->label(false)->widget(DateTimePicker::className(), [
                            'name' => 'datetime_10',
                            'id' => 'datetimepicker1',
                            'options' => ['placeholder' => '__/__/____ __:__', 'class' => 'application-form-input'],
                            'language' => 'ru',
                            'type' => DateTimePicker::TYPE_INPUT,
                            'pluginOptions' => [
                                'autoclose' => true,
                                'format' => 'dd/mm/yyyy hh:ii',
                            ]
                        ]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 application-form">
                        <?= $form->field($model, 'route')->dropdownList(['Днепр','Десна'], ['prompt'=>'Маршрут',
                        'class' => 'application-form-input'])->label(false) ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 application-form">
                        <?= $form->field($model, 'guests')->dropdownList(['5','10','15','20'], ['prompt'=>'Количество гостей',
                        'class' => 'application-form-input'])->label(false) ?>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 label-date application-form">
                        до
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 application-form">
                        <?= $form->field($model, 'dateto')->label(false)->widget(DateTimePicker::className(), [
                            'name' => 'datetime_10',
                            'id' => 'datetimepicker2',
                            'options' => ['placeholder' => '__/__/____ __:__', 'class' => 'application-form-input'],
                            'language' => 'ru',
                            'type' => DateTimePicker::TYPE_INPUT,
                            'pluginOptions' => [
                                'autoclose' => true,
                                'format' => 'dd/mm/yyyy hh:ii',
                            ]
                        ]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 application-form">
                        <?= $form->field($model, 'name')->textInput(['placeholder'=>'Имя', 'class' => 'application-form-input'])
                        ->label(false) ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 application-form">
                        <?= $form->field($model, 'phone')->label(false)->widget(\yii\widgets\MaskedInput::className(), [
                            'mask' => '+38 (999) 999-99-99'])
                            ->textInput(['placeholder'=>'+38 (___) ___-__-__', 'class' => 'application-form-input']) ?>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 label-date application-form">

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 application-form">
                        <div class="form-group">
                            <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn btn-primary btn-send']) ?>
                        </div>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
