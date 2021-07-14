<template>
    <div class="card-body">
        <form-wizard
            @on-complete="onComplete"
            @on-loading="setLoading"
            shape="circle"
            title="Selamat datang Di Tes Diagnosa Narcisstic Personality Disorder"
            subtitle="harap dibaca pernyataan dibawah dengan teliti"
            color="blue">

            <!--rule 1 sampai rule 21 -->
            <tab-content title="Rote Node Gejala 7" :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G7 }}</p>
                            <label for="inputAddress"></label>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 1" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 7" v-model="rule1.gejala_7"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 1" v-if="rule1.gejala_7>=58" :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G1 }}</p>
                            <label for="inputAddress"></label>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 1" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 1" v-model="rule1.gejala_1"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Usia" v-if="rule1.gejala_7>=58 && rule1.gejala_1>=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_usia }}</p>
                            <label for="inputAddress"></label>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 1" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Usia" v-model="rule1.usia"
                                           placeholder="usai anda">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 2" v-if="rule1.gejala_7>=58 && rule1.usia >=1 && rule1.gejala_1 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G2 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 1" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 2" v-model="rule1.gejala_2"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 3"
                         v-if="rule1.gejala_7>=58 && rule1.gejala_2>=58 && rule1.gejala_1 >=58 && rule1.usia >=17"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G3 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 3" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 3" v-model="rule1.gejala_3"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 4" v-if="rule1.gejala_7>=58 && rule1.gejala_1 >=58  && rule1.gejala_3>=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G4 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 4" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 4" v-model="rule1.gejala_4"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 5" v-if="rule1.gejala_7>=58 && rule1.gejala_1 >=58 && rule1.gejala_4>=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G5 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 5" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 5" v-model="rule1.gejala_5"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>

            <tab-content title="Gejala 6" v-if="rule1.gejala_7>=58 && rule1.gejala_1 >=58 &&rule1.gejala_5>=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G6 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 6" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 6" v-model="rule1.gejala_6"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 6"
                         v-if="rule1.gejala_7>=58 && rule1.gejala_1 >=58 && rule1.gejala_5>=48 && rule1.gejala_5<=57"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G6 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 6" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 6" v-model="rule1.gejala_6"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>

            <tab-content title="Gejala 8i" v-if="rule1.gejala_7>=58 && rule1.gejala_5>=58 && rule1.gejala_6>=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G8 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 8" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 8" v-model="rule1.gejala_8"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 8x" v-if="rule1.gejala_7>=58 && rule1.gejala_5 >=48 && rule1.gejala_5 <=57 && rule1.gejala_6>=58 "
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G8 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 8" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 8" v-model="rule1.gejala_8"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>

            <tab-content title="Gejala 8c" v-if="rule1.gejala_7>=58 && rule1.gejala_5 >=58 && rule1.gejala_6 >=1 && rule1.gejala_6 <=47 "
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G8 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 8" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 8" v-model="rule1.gejala_8"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>

            <tab-content title="Gejala 9"
                         v-if="rule1.gejala_7>=58 && rule1.gejala_5 >=58 && rule1.gejala_8 >= 1 && rule1.gejala_8 <=47"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G9 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 9" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 9" v-model="rule1.gejala_9"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <!--end rule 1 sampai rule 21 -->

            <!-- rule 22 sampai rule 34 -->
            <tab-content title="Gejala 9" v-if="rule1.gejala_7>=58 && rule1.gejala_1 >=48 && rule1.gejala_1 <= 57"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G9 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 9" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 9" v-model="rule1.gejala_9"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Usia" v-if="rule1.gejala_9 >= 58 && rule1.gejala_1 >=48 && rule1.gejala_1 <=57"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_usia }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="usia" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="usia" v-model="rule1.usia"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Usia"
                         v-if="rule1.gejala_7>=58 && rule1.gejala_1 >=48 && rule1.gejala_1 <=57 && rule1.gejala_9 >=1 && rule1.gejala_9 <=47"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_usia }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="usia" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="usia" v-model="rule1.usia"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 2"
                         v-if="rule1.gejala_7>=58 && rule1.gejala_1 >=48 && rule1.gejala_1 <=57 && rule1.usia >=1 && rule1.gejala_9 <=47"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G2 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala 2" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 2" v-model="rule1.gejala_2"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 3"
                         v-if="rule1.gejala_7>=58 && rule1.gejala_1 >=48 && rule1.gejala_1 <=57 && rule1.gejala_9 >=1 && rule1.gejala_9 <=57  && rule1.usia <17 && rule1.gejala_2 >=48 && rule1.gejala_2 <=57"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G3 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 3" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 3" v-model="rule1.gejala_3"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 4"
                         v-if="rule1.gejala_7>=58 && rule1.gejala_1 >=48 && rule1.gejala_1 <=57 && rule1.gejala_3 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G4 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 4" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 4" v-model="rule1.gejala_4"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 5"
                         v-if="rule1.gejala_7>=58 && rule1.gejala_1 >=48 && rule1.gejala_1 <=57 && rule1.gejala_4 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G5 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 5" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 5" v-model="rule1.gejala_5"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <!-- end rule 22 sampai rule 34 -->

            <!-- rule 35 sampai rule 46 -->

            <tab-content title="Gejala 9" v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G9 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 9" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 9" v-model="rule1.gejala_9"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 2" v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G2 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="Gejala 2" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="Gejala 2" v-model="rule1.gejala_2"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>

            <tab-content title="Usia"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=48 && rule1.gejala_9 <=57"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_usia }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="usia" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="usia" v-model="rule1.usia"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 1"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=48 && rule1.gejala_9 <=57 && rule1.usia >=17"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G1 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_1" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 1" v-model="rule1.gejala_1"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 2"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=48 && rule1.gejala_9 <=57 && rule1.gejala_1 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G2 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_2" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 2" v-model="rule1.gejala_2"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 3"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=48 && rule1.gejala_9 <=57 && rule1.gejala_2 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G3 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_3" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 3" v-model="rule1.gejala_3"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 4"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=48 && rule1.gejala_9 <=57 && rule1.gejala_3 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G4 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_4" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 4" v-model="rule1.gejala_4"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 5"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=48 && rule1.gejala_9 <=57 && rule1.gejala_4 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G5 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_5" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 5" v-model="rule1.gejala_5"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 6"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=48 && rule1.gejala_9 <=57 && rule1.gejala_5 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G6 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_6" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 6" v-model="rule1.gejala_6"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 8"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=48 && rule1.gejala_9 <=57 && rule1.gejala_6 >=1 && rule1.gejala_6 <=47"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G8 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_8" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 8" v-model="rule1.gejala_8"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 10"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=48 && rule1.gejala_9 <=57 && rule1.gejala_8 >=1 && rule1.gejala_8 <=47"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G10 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_10" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 10" v-model="rule1.gejala_10"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <!-- end rule 35 sampai rule 46 -->

            <!-- rule 47 sampai rule 59 -->
            <tab-content title="Usia"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=1 && rule1.gejala_9 <=47"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_usia }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="usia" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="usia" v-model="rule1.usia"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 1"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=1 && rule1.gejala_9 <=47 && rule1.usia >=1"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G1 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_1" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 1" v-model="rule1.gejala_1"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 2"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=1 && rule1.gejala_9 <=47 && rule1.gejala_1 >=58 && rule1.usia >=17"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G2 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_2" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 2" v-model="rule1.gejala_2"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 2"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=1 && rule1.gejala_9 <=47 && rule1.gejala_1 >=48 && rule1.gejala_1 <=57 && rule1.usia >=1 && rule1.usia <=16 "
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G2 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_2" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 2" v-model="rule1.gejala_2"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 3"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=1 && rule1.gejala_9 <=47 && rule1.gejala_2 >=58 && rule1.usia <17"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G3 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_3" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 3" v-model="rule1.gejala_3"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 4"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=1 && rule1.gejala_9 <=47 && rule1.gejala_3 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G4 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_4" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 4" v-model="rule1.gejala_4"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 5"
                         v-if="rule1.gejala_7 >=48 && rule1.gejala_7 <=57 && rule1.gejala_9 >=1 && rule1.gejala_9 <=47 && rule1.gejala_4 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G5 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_5" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 5" v-model="rule1.gejala_5"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <!-- end rule 47 sampai rule 59 -->

            <!-- rule 60 sampai rule 69 -->
            <tab-content title="Gejala 14" v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G14 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_14" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 14" v-model="rule1.gejala_14"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 1" v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G1 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_1" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 1" v-model="rule1.gejala_1"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="usia"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=58 && rule1.gejala_1 >=1 && rule1.gejala_1 <=47"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_usia }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="usia" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="usia" v-model="rule1.usia"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 2"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=58 && rule1.usia >=17"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G2 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_2" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 2" v-model="rule1.gejala_2"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>


            <tab-content title="usia"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=48 && rule1.gejala_14 <=57"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_usia }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="usia" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="usia" v-model="rule1.usia"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>

            </tab-content>
            <tab-content title="Gejala 1"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=48 && rule1.gejala_14 <=57 &&  rule1.usia >=17"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G1 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_1" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 1" v-model="rule1.gejala_1"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 2"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 &&  rule1.gejala_14 >=48 && rule1.gejala_14 <=57 && rule1.usia >=17 && rule1.gejala_1 >=1 && rule1.gejala_1 <=47"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G2 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_2" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 2" v-model="rule1.gejala_2"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 3"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 &&  rule1.gejala_14 >=48 && rule1.gejala_14 <=57 && rule1.gejala_2 >=1 && rule1.gejala_2 <=47"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G3 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_3" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 3" v-model="rule1.gejala_3"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <!--end rule 60 sampai rule 69 -->

            <!-- rule 70 sampai rule 94 -->
            <tab-content title="Gejala 6"
                         v-if="rule1.gejala_7>=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G6 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_6" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 6" v-model="rule1.gejala_6"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="usia"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47 && rule1.gejala_6 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_usia }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="usia" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="usia" v-model="rule1.usia"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 1"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47 &&  rule1.gejala_6 >=58 &&  rule1.usia >=17"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G1 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_1" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 1" v-model="rule1.gejala_1"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>


            <tab-content title="usia"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47 && rule1.gejala_6 >=1 && rule1.gejala_6 <=47"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_usia }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="usia" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="usia" v-model="rule1.usia"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 1"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47 && rule1.gejala_6 >=1 && rule1.gejala_6 <=47 &&  rule1.usia >=17"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G1 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_1" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 1" v-model="rule1.gejala_1"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 2 "
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47 && rule1.gejala_6 >=1 && rule1.gejala_6 <=47 && rule1.usia >=17 && rule1.gejala_1 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G2 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_2" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 2" v-model="rule1.gejala_2"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 2"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47 && rule1.gejala_6 >=1 && rule1.gejala_6 <=47  && rule1.usia >=17 && rule1.gejala_1 >=48 && rule1.gejala_1 <=57"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G2 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_2" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 2" v-model="rule1.gejala_2"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 3"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47 && rule1.gejala_6 >=1 && rule1.gejala_6 <=47 &&  rule1.usia >=17 && rule1.gejala_1 >=48 && rule1.gejala_1 <=57 && rule1.gejala_2 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G3 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_3" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 3" v-model="rule1.gejala_3"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 3"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47 && rule1.gejala_6 >=1 && rule1.gejala_6 <=47 &&  rule1.usia >=17 &&  rule1.gejala_1 >=48 && rule1.gejala_1 <=57 && rule1.gejala_2 >=48 && rule1.gejala_2<=57"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G3 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_3" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 3" v-model="rule1.gejala_3"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 2"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47 && rule1.gejala_6 >=1 && rule1.gejala_6 <=47  && rule1.usia >=17 && rule1.gejala_1 >=1 && rule1.gejala_1 <=47"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G2 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_2" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 2" v-model="rule1.gejala_2"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 4"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47 && rule1.gejala_6 >=1 && rule1.gejala_6 <=47 && rule1.gejala_2 >=58 && rule1.gejala_3 >=48 && rule1.gejala_3 <=57"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G4 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_4" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 4" v-model="rule1.gejala_4"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 4"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47 && rule1.gejala_6 >=1 && rule1.gejala_6 <=47   && rule1.gejala_2 >=48 &&  rule1.usia >=17 &&  rule1.gejala_2<=57 && rule1.gejala_3 >=48 && rule1.gejala_3 <=57"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G4 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_4" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 4" v-model="rule1.gejala_4"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 5"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47 && rule1.gejala_6 >=1 && rule1.gejala_6 <=47  && rule1.gejala_2 >=48 && rule1.gejala_2<=57 && rule1.gejala_4 >=58"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G5 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_5" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 5" v-model="rule1.gejala_5"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>

            <tab-content title="Gejala 1"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47 && rule1.gejala_6 >=1 && rule1.gejala_6 <=47 && rule1.usia >=1 && rule1.usia<=16"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G1 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_1" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 1" v-model="rule1.gejala_1"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>


            <tab-content title="Gejala 2"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47 && rule1.gejala_6 >=1 && rule1.gejala_6 <=47 && rule1.usia >= 1 && rule1.usia <=16 && rule1.gejala_1 >=48 && rule1.gejala_1 <=57"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G2 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_2" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 2" v-model="rule1.gejala_2"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>
            <tab-content title="Gejala 3"
                         v-if="rule1.gejala_7 >=1 && rule1.gejala_7 <=47 && rule1.gejala_14 >=1 && rule1.gejala_14 <=47 && rule1.gejala_6 >=1 && rule1.gejala_6 <=47 && rule1.usia >= 1 && rule1.usia <=16 && rule1.gejala_2 >=48 && rule1.gejala_2<=57"
                         :before-change="validateAsync">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            <h2>Pernyataan diangosa</h2>
                            <p class="lead">{{ datas[0].pernyataan_G3 }}</p>
                            <ValidationObserver>
                                <ValidationProvider vid="gejala_3" :rules="{required,numeric}" v-slot="{ errors }">
                                    <input type="text" class="form-control" name="gejala 3" v-model="rule1.gejala_3"
                                           placeholder="Tingkat Kayakinan">
                                    <span class="text-white">{{ errors[0] }}</span>
                                </ValidationProvider>
                            </ValidationObserver>
                        </div>
                    </div>
                </div>
            </tab-content>


            <!--end rule 70 sampai rule 94 -->


            <div class="loader" v-if="loadingWizard"></div>
        </form-wizard>

    </div>
</template>


<script>
import {ValidationProvider, ValidationObserver, localize} from 'vee-validate/dist/vee-validate.full';

localize({
    en: {
        messages: {
            required: 'form {_field_} tidak boleh kosong',
            numeric: 'form {_field_} hanya boleh berisi angka yang mempresentasikan tingkat keyakinan anda',
            min: 'this field must have no less than {length} characters',
            max: (_, {length}) => `this field must have no more than ${length} characters`
        }
    }
});
export default {
    components: {
        ValidationProvider,
        ValidationObserver,
    },


    data() {
        return {
            datas: [],
            loadingWizard: false,
            rule1: new Form({
                usia: '',
                gejala_1: '',
                gejala_2: '',
                gejala_3: '',
                gejala_4: '',
                gejala_5: '',
                gejala_6: '',
                gejala_7: '',
                gejala_8: '',
                gejala_9: '',
                gejala_10: '',
                gejala_14: '',

            }),
        }
    },
    methods: {
        showDataPernyataan() {
            axios.get("/api/pernyataan").then(({data}) => (this.datas = data));
        },

        onComplete: function () {

            this.rule1.post('/api/pernyataan').then(() => {
                toast({
                    type: 'success',
                    title: 'Diagnosa selesai,silakan cek menu riwayat diagnosa'

                })
                this.rule1.reset();
            })
                .catch((error) => {
                    console.log(error);
                })
        },
        setLoading: function (value) {
            this.loadingWizard = value
        },
        validateAsync: function () {
            return new Promise((resolve, reject) => {
                setTimeout(() => {

                    if (this.count < 1) {
                        this.count++
                        resolve(true)
                    } else {
                        this.count = 0
                        resolve(true)

                    }
                }, 1000)
            })
        },
    },

    created() {
        this.showDataPernyataan();
    },

}
</script>


<style scoped>
span.error {
    color: #e74c3c;
    font-size: 20px;
    display: flex;
    justify-content: center;
}

/* This is a css loader. It's not related to vue-form-wizard */
.loader,
.loader:after {
    border-radius: 50%;
    width: 10em;
    height: 10em;
}

.loader {
    margin: 60px auto;
    font-size: 10px;
    position: relative;
    text-indent: -9999em;
    border-top: 1.1em solid rgba(255, 255, 255, 0.2);
    border-right: 1.1em solid rgba(255, 255, 255, 0.2);
    border-bottom: 1.1em solid rgba(255, 255, 255, 0.2);
    border-left: 1.1em solid #0056b3;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-animation: load8 1.1s infinite linear;
    animation: load8 1.1s infinite linear;
}

@-webkit-keyframes load8 {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@keyframes load8 {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

</style>
