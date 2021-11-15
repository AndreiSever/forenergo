<!-- Modal -->
<div class="modal fade modal-form-bid" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Запрос цены</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div v-if="message_send == false" class="modal-body">
                <div class="form-field">
                    <div class="form-field-inner">
                        <label for="name">Ваше имя:<span class="reqiured">*</span></label>
                        <input :class="{'error' : err_name.length > 0}" id="name" v-model="pack.name" placeholder="Ваше имя" required />
                    </div>
                    <div v-if="err_name.length > 0" class="text-error">{{err_name}}</div>
                </div>
                <div class="form-field">
                    <div class="form-field-inner">
                        <label>Телефон:<span class="reqiured">*</span></label>
                        <input :class="{'error' : err_phone.length > 0}" id="phone" v-model="pack.phone" placeholder="Номер телефона" required />
                    </div>
                    <div v-if="err_phone.length > 0"><span class="text-error">{{err_phone}}</span></div>
                </div>
                <div class="form-field">
                    <div class="form-field-inner">
                        <label>E-mail:<span class="reqiured">*</span></label>
                        <input :class="{'error' : err_email.length > 0}" type="email" id="email" v-model="pack.email" placeholder="E-mail" required />
                    </div>
                    <div v-if="err_email.length > 0"><span class="text-error">{{err_email}}</span></div>
                </div>

                <div class="form-field-description">
                    <label>Какую информацию хотите получить:</label>
                    <textarea v-model="pack.description"></textarea>
                </div>

                <div class="mandatory">Поля помеченные (*) обязательны для заполнения</div>

                <div class="form-field-checkbox">
                    <input type="checkbox" id="quickly" v-model="pack.quickly">
                    <label for="quickly">Прошу ответить срочно</label>
                </div>

                <div class="form-field-checkbox long" :class="{'error': err_agree.length > 0}">
                    <input type="checkbox" id="agree" v-model="pack.agree">
                    <label for="agree">Даю <a href="javascript:void(0)">согласие на обработку моих персональных данных
                            Политика в отношении обработки персональных данных</a></label>
                </div>

                <div class="modal-footer">
                    <button @click="send" class="btn btn-purple">Отправить</button>
                </div>
            </div>

            <div v-else class="send-complette" >
                Заявка отправлена, наши менеджеры свяжутся с Вами в ближайщее время.
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
