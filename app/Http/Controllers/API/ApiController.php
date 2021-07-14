<?php

namespace App\Http\Controllers\API;

use App\Diagnosa;
use App\Pertanyaan;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:api');
    }


    public function index()
    {
        return Pertanyaan::latest()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $diagnosa = new Diagnosa();

        if ($request->gejala_7 >= 58) {
            $diagnosa->gejala_7 = "yakin";
        }
        if ($request->gejala_1 >= 58) {
            $diagnosa->gejala_1 = "yakin";
        }
        if ($request->usia >= 17) {
            $diagnosa->usia = "pemuda";
        }

        if ($request->gejala_2 >= 17) {
            $diagnosa->gejala_2 = "yakin";
        }
        if ($request->gejala_3 >= 58) {
            $diagnosa->gejala_3 = "yakin";
        }
        if ($request->gejala_4 >= 58) {
            $diagnosa->gejala_4 = "yakin";
        }
        if ($request->gejala_5 >= 58) {
            $diagnosa->gejala_5 = "yakin";
        }
        if ($request->gejala_6 >= 58) {
            $diagnosa->gejala_6 = "yakin";
        }
        if ($request->gejala_8 >= 58) {
            $diagnosa->gejala_8 = "yakin";
            $diagnosa->rule_id = 1;
            $diagnosa->saran_id = 1;
            $diagnosa->hasil_diagnosa = "tinggi";
        }

        // ini rule 2
        if ($request->gejala_8 >= 48 && $request->gejala_8 <= 57) {
            $diagnosa->gejala_8 = "mungkin";
            $diagnosa->rule_id = 2;
            $diagnosa->saran_id = 2;
            $diagnosa->hasil_diagnosa = "sedang";
        }

        //rule 3
        if ($request->gejala_8 >= 1 && $request->gejala_8 <= 47) {
            $diagnosa->gejala_8 = "tidak yakin";
            if ($request->gejala_9 >= 58) {
                $diagnosa->gejala_9 = "yakin";
                $diagnosa->rule_id = 3;
                $diagnosa->saran_id = 3;
                $diagnosa->hasil_diagnosa = "tinggi";
            }
            if ($request->gejala_9 >= 48 && $request->gejala_9 <= 57) {
                $diagnosa->gejala_9 = "mungkin";
                $diagnosa->rule_id = 4;
                $diagnosa->saran_id = 4;
                $diagnosa->hasil_diagnosa = "tinggi";
            }
            if ($request->gejala_9 >= 1 && $request->gejala_9 <= 47) {
                $diagnosa->gejala_9 = "tidak yakin";
                $diagnosa->rule_id = 5;
                $diagnosa->saran_id = 5;
                $diagnosa->hasil_diagnosa = "tinggi";
            }
        }

        if ($request->gejala_6 >= 1 && $request->gejala_6 <= 57) {
            $diagnosa->gejala_6 = "tidak yakin";
            if ($request->gejala_8 >= 58) {
                $diagnosa->gejala_8 = "yakin";
                $diagnosa->rule_id = 6;
                $diagnosa->saran_id = 6;
                $diagnosa->hasil_diagnosa = "tinggi";
            }
            if ($request->gejala_8 >= 48 && $request->gejala_8 <= 57) {
                $diagnosa->gejala_8 = "mungkin";
                $diagnosa->rule_id = 7;
                $diagnosa->saran_id = 7;
                $diagnosa->hasil_diagnosa = "sedang";
            }
            if ($request->gejala_8 >= 1 && $request->gejala_8 <= 47) {
                $diagnosa->gejala_8 = "tidak yakin";
                if ($request->gejala_9 >= 58) {
                    $diagnosa->gejala_9 = "yakin";
                    $diagnosa->rule_id = 8;
                    $diagnosa->saran_id = 8;

                    $diagnosa->hasil_diagnosa = "sedang";
                }
                if ($request->gejala_9 >= 48 && $request->gejala_9 <= 57) {
                    $diagnosa->gejala_9 = "mungkin";
                    $diagnosa->rule_id = 9;
                    $diagnosa->saran_id = 9;
                    $diagnosa->hasil_diagnosa = "sedang";
                }
                if ($request->gejala_9 >= 1 && $request->gejala_9 <= 47) {
                    $diagnosa->gejala_9 = "tidak yakin";
                    $diagnosa->rule_id = 10;
                    $diagnosa->saran_id = 10;

                    $diagnosa->hasil_diagnosa = "sedang";
                }

            }

        }
        // end rule 1 sampai 10

        // rule 11
        if ($request->gejala_5 >= 48 && $request->gejala_5 <= 57) {
            $diagnosa->gejala_5 = "mungkin";
            if ($request->gejala_6 >= 58 && $request->gejala_8 >= 58) {
                $diagnosa->gejala_6 = "yakin";
                $diagnosa->gejala_8 = "yakin";
                $diagnosa->rule_id = 11;
                $diagnosa->saran_id = 11;
                $diagnosa->hasil_diagnosa = "tinggi";

            }
            if ($request->gejala_6 >= 58 && $request->gejala_8 >= 48 && $request->gejala_8 <= 57) {
                $diagnosa->gejala_6 = "yakin";
                $diagnosa->gejala_8 = "mungkin";
                $diagnosa->rule_id = 12;
                $diagnosa->saran_id = 12;
                $diagnosa->hasil_diagnosa = "tinggi";

            }
            if ($request->gejala_6 >= 58 && $request->gejala_8 >= 1 && $request->gejala_8 <= 47) {
                $diagnosa->gejala_6 = "yakin";
                $diagnosa->gejala_8 = "tidak yakin";
                $diagnosa->rule_id = 13;
                $diagnosa->saran_id = 13;
                $diagnosa->hasil_diagnosa = "tinggi";
            }
            if ($request->gejala_6 >= 48 && $request->gejala_6 <= 57) {
                $diagnosa->gejala_6 = "mungkin";
                $diagnosa->rule_id = 14;
                $diagnosa->saran_id = 14;
                $diagnosa->hasil_diagnosa = "sedang";

            }


        }

        if ($request->gejala_5 >= 1 && $request->gejala_5 <= 47) {
            $diagnosa->gejala_5 = "tidak yakin";
            $diagnosa->rule_id = 15;
            $diagnosa->saran_id = 15;
            $diagnosa->hasil_diagnosa = "rendah";
        }

        if ($request->gejala_4 >=1 && $request->gejala_4 <=47) {
            $diagnosa->gejala_4 = "tidak yakin";
            $diagnosa->rule_id = 16;
            $diagnosa->saran_id = 16;
            $diagnosa->hasil_diagnosa = "rendah";
        }

        if ($request->gejala_3 >= 1 && $request->gejala_3 <= 47) {
            $diagnosa->gejala_3 = "tidak yakin";
            $diagnosa->rule_id = 17;
            $diagnosa->saran_id = 17;
            $diagnosa->hasil_diagnosa = "rendah";
        }

        if ($request->gejala_2 >= 48 && $request->gejala_2 <= 57) {
            $diagnosa->gejala_2 = "mungkin";
            $diagnosa->rule_id = 18;
            $diagnosa->saran_id = 18;
            $diagnosa->hasil_diagnosa = "tinggi";
        }

        if ($request->gejala_2 >= 1 && $request->gejala_2 <= 47) {
            $diagnosa->gejala_2 = "tidak yakin";
            $diagnosa->rule_id = 19;
            $diagnosa->saran_id = 19;
            $diagnosa->hasil_diagnosa = "sedang";
        }

        if ($request->usia >= 1 && $request->usia <= 17) {
            $diagnosa->usia = "dibawah umur";
            if ($request->gejala_2 >= 58) {
                $diagnosa->gejala_2 = "yakin";
                $diagnosa->rule_id = 20;
                $diagnosa->saran_id = 20;
                $diagnosa->hasil_diagnosa = "tinggi";

            }
            if ($request->gejala_2 >= 48 && $request->gejala_2 <= 57) {
                $diagnosa->gejala_2 = "mungkin";
                $diagnosa->rule_id = 21;
                $diagnosa->saran_id = 21;
                $diagnosa->hasil_diagnosa = "sedang";
            }
        }

        if ($request->gejala_1 >= 48 && $request->gejala_1 <= 57) {
            $diagnosa->gejala_1 = "mungkin";
            if ($request->gejala_9 >= 58) {
                if ($request->usia >= 1 && $request->usia <= 17) {
                    $diagnosa->gejala_9 = "yakin";
                    $diagnosa->usia = "dibawah umur";
                    $diagnosa->rule_id = 22;
                    $diagnosa->saran_id = 22;
                    $diagnosa->hasil_diagnosa = "sedang";
                }
            }
            if ($request->gejala_9 >= 48 && $request->gejala_9 <= 57) {
                $diagnosa->gejala_9 = "mungkin";
                $diagnosa->rule_id = 23;
                $diagnosa->saran_id = 23;
                $diagnosa->hasil_diagnosa = "tinggi";
            }


            if ($request->gejala_9 >= 1 && $request->gejala_9 <= 47) {
                $diagnosa->gejala_9 = "tidak yakin";
                if ($request->usia >= 17) {
                    $diagnosa->usia = "pemuda";
                    if ($request->gejala_2 >= 58) {
                        $diagnosa->gejala_2 = "yakin";
                        $diagnosa->rule_id = 24;
                        $diagnosa->saran_id = 24;
                        $diagnosa->hasil_diagnosa = "rendah";
                    }
                    if ($request->gejala_2 >= 48 && $request->gejala_2 <= 57) {
                        $diagnosa->gejala_2 = "mungkin";
                        $diagnosa->rule_id = 25;
                        $diagnosa->saran_id = 25;
                        $diagnosa->hasil_diagnosa = "rendah";
                    }
                    if ($request->gejala_2 >= 1 && $request->gejala_2 <= 47) {
                        $diagnosa->gejala_2 = "tidak yakin";
                        $diagnosa->rule_id = 26;
                        $diagnosa->saran_id = 26;
                        $diagnosa->hasil_diagnosa = "rendah";
                    }


                }
                if ($request->usia < 17) {
                    $diagnosa->usia = "dibawah umur";
                    if ($request->gejala_2 >= 58) {
                        $diagnosa->gejala_2 = "yakin";
                        $diagnosa->rule_id = 27;
                        $diagnosa->saran_id = 27;
                        $diagnosa->hasil_diagnosa = "tinggi";
                    }
                    if ($request->gejala_2 >= 48 && $request->gejala_2 <= 57) {
                        $diagnosa->gejala_2 = "mungkin";
                        if ($request->gejala_3 >= 58) {
                            $diagnosa->gejala_3 = "yakin";
                            if ($request->gejala_4 >= 58) {
                                $diagnosa->gejala_4 = "yakin";
                                if ($request->gejala_5 >= 58) {
                                    $diagnosa->gejala_5 = "yakin";
                                    $diagnosa->rule_id = 28;
                                    $diagnosa->saran_id = 28;
                                    $diagnosa->hasil_diagnosa = "rendah";
                                }
                                if ($request->gejala_5 >= 48 && $request->gejala_5 <= 57) {
                                    $diagnosa->gejala_5 = "mungkin";
                                    $diagnosa->rule_id = 29;
                                    $diagnosa->saran_id = 29;
                                    $diagnosa->hasil_diagnosa = "rendah";
                                }
                                if ($request->gejala_5 >= 1 && $request->gejala_5 <= 47) {
                                    $diagnosa->gejala_5 = "tidak yakin";
                                    $diagnosa->rule_id = 30;
                                    $diagnosa->saran_id = 30;
                                    $diagnosa->hasil_diagnosa = "rendah";
                                }
                            }
                            if ($request->gejala_4 >= 1 && $request->gejala_4 <= 47) {
                                $diagnosa->gejala_4 = "tidak yakin";
                                $diagnosa->rule_id = 31;
                                $diagnosa->saran_id = 31;
                                $diagnosa->hasil_diagnosa = "rendah";
                            }
                        }
                        if ($request->gejala_3 >= 1 && $request->gejala_3 <= 47) {
                            $diagnosa->gejala_3 = "tidak yakin";
                            $diagnosa->rule_id = 32;
                            $diagnosa->saran_id = 32;
                            $diagnosa->hasil_diagnosa = "rendah";

                        }
                    }
                    if ($request->gejala_2 >= 1 && $request->gejala_2 <= 47) {
                        $diagnosa->gejala_2 = "rendah";
                        $diagnosa->rule_id = 33;
                        $diagnosa->saran_id = 33;
                        $diagnosa->hasil_diagnosa = "rendah";
                    }
                }

            }


        }

        if ($request->gejala_1 >= 1 && $request->gejala_1 <= 47) {
            $diagnosa->gejala_1 = "tidak yakin";
            $diagnosa->rule_id = 34;
            $diagnosa->saran_id = 34;
            $diagnosa->hasil_diagnosa = "rendah";

        }


        //cabang 2
        if ($request->gejala_7 >= 48 && $request->gejala_7 <= 57) {
            $diagnosa->gejala_7 = "mungkin";
            if ($request->gejala_9 >= 58) {
                $diagnosa->gejala_9 = "yakin";
                if ($request->gejala_2 >= 58) {
                    $diagnosa->gejala_2 = "yakin";
                    $diagnosa->rule_id = 35;
                    $diagnosa->saran_id = 35;
                    $diagnosa->hasil_diagnosa = "tinggi";
                }
                if ($request->gejala_2 >= 48 && $request->gejala_2 <= 57) {
                    $diagnosa->gejala_2 = "mungkin";
                    $diagnosa->rule_id = 36;
                    $diagnosa->saran_id = 36;
                    $diagnosa->hasil_diagnosa = "rendah";
                }
            }
            if ($request->gejala_9 >= 48 && $request->gejala_9 <= 57) {
                $diagnosa->gejala_9 = "mungkin";
                if ($request->usia >= 17) {
                    $diagnosa->usia = "pemuda";
                    if ($request->gejala_1 >= 58) {
                        $diagnosa->gejala_1 = "yakin";
                        if ($request->gejala_2 >= 58) {
                            $diagnosa->gejala_2 = "yakin";
                            if ($request->gejala_3 >= 58) {
                                $diagnosa->gejala_3 = "yakin";
                                if ($request->gejala_4 >= 58) {
                                    $diagnosa->gejala_4 = "yakin";
                                    if ($request->gejala_5 >= 58) {
                                        $diagnosa->gejala_5 = "yakin";
                                        if ($request->gejala_6 <= 57) {
                                            $diagnosa->gejala_6 = "tidak yakin";
                                            if ($request->gejala_8 <= 57) {
                                                $diagnosa->gejala_8 = "tidak yakin";
                                                if ($request->gejala_10 >= 48 && $request->gejala_10 <= 57) {
                                                    $diagnosa->gejala_10 = "mungkin";
                                                    $diagnosa->rule_id = 37;
                                                    $diagnosa->saran_id = 37;
                                                    $diagnosa->hasil_diagnosa = "sedang";

                                                }
                                                if ($request->gejala_10 >= 1 && $request->gejala_10 <= 47) {
                                                    $diagnosa->gejala_10 = "tidak yakin";
                                                    $diagnosa->rule_id = 38;
                                                    $diagnosa->saran_id = 38;
                                                    $diagnosa->hasil_diagnosa = "sedang";
                                                }
                                            }
                                        }
                                    }
                                    if ($request->gejala_5 >= 48 && $request->gejala_5 <= 57) {
                                        $diagnosa->gejala_5 = "mungkin";
                                        $diagnosa->rule_id = 39;
                                        $diagnosa->saran_id = 39;
                                        $diagnosa->hasil_diagnosa = "sedang";
                                    }
                                    if ($request->gejala_5 >= 1 && $request->gejala_5 <= 47) {
                                        $diagnosa->gejala_5 = "tidak yakin";
                                        $diagnosa->rule_id = 40;
                                        $diagnosa->saran_id = 40;
                                        $diagnosa->hasil_diagnosa = "rendah";
                                    }
                                }
                                if ($request->gejala_4 <= 57) {
                                    $diagnosa->gejala_4 = "tidak yakin";
                                    $diagnosa->rule_id = 41;
                                    $diagnosa->saran_id = 41;
                                    $diagnosa->hasil_diagnosa = "rendah";
                                }

                            }
                            if ($request->gejala_3 <= 57) {
                                $diagnosa->gejala_3 = "tidak yakin";
                                $diagnosa->rule_id = 42;
                                $diagnosa->saran_id = 42;
                                $diagnosa->hasil_diagnosa = "rendah";
                            }
                        }
                        if ($request->gejala_2 >= 48 && $request->gejala_2 <= 57) {
                            $diagnosa->gejala_2 = "mungkin";
                            $diagnosa->rule_id = 43;
                            $diagnosa->saran_id = 43;
                            $diagnosa->hasil_diagnosa = "sedang";
                        }
                        if ($request->gejala_2 >= 1 && $request->gejala_2 <= 47) {
                            $diagnosa->gejala_2 = "tidak yakin";
                            $diagnosa->rule_id = 44;
                            $diagnosa->saran_id = 44;
                            $diagnosa->hasil_diagnosa = "rendah";
                        }
                    }
                    if ($request->gejala_1 <= 57) {
                        $diagnosa->gejala_1 = "mungkin";
                        $diagnosa->rule_id = 45;
                        $diagnosa->saran_id = 45;
                        $diagnosa->hasil_diagnosa = "tinggi";
                    }
                }
                if ($request->usia < 17) {
                    $diagnosa->usia = "dibawah umur";
                    $diagnosa->rule_id = 46;
                    $diagnosa->saran_id = 46;
                    $diagnosa->hasil_diagnosa = "rendah";
                }
            }


            //rule 47 sampai 59
            if ($request->gejala_9 >= 1 && $request->gejala_9 <= 47) {
                $diagnosa->gejala_9 = "tidak yakin";
                if ($request->usia >= 17) {
                    $diagnosa->usia = "pemuda";
                    if ($request->gejala_1 >= 58) {
                        $diagnosa->gejala_1 = "yakin";
                        if ($request->gejala_2 >= 58) {
                            $diagnosa->gejala_2 = "yakin";
                            $diagnosa->rule_id = 47;
                            $diagnosa->saran_id = 47;
                            $diagnosa->hasil_diagnosa = "sedang";
                        }
                        if ($request->gejala_2 >= 48 && $request->gejala_2 <= 57) {
                            $diagnosa->gejala_2 = "mungkin";
                            $diagnosa->rule_id = 48;
                            $diagnosa->saran_id = 48;
                            $diagnosa->hasil_diagnosa = "sedang";
                        }
                        if ($request->gejala_2 >= 1 && $request->gejala_2 <= 47) {
                            $diagnosa->gejala_2 = "tidak yakin";
                            $diagnosa->rule_id = 49;
                            $diagnosa->saran_id = 49;
                            $diagnosa->hasil_diagnosa = "sedang";
                        }
                    }
                    if ($request->gejala_1 <= 57) {
                        $diagnosa->gejala_1 = "sedang";
                        $diagnosa->rule_id = 50;
                        $diagnosa->saran_id = 50;
                        $diagnosa->hasil_diagnosa = "rendah";
                    }
                }
                if ($request->usia < 17) {
                    $diagnosa->usia = "dibawah umur";
                    if ($request->gejala_1 >= 58) {
                        $diagnosa->gejala_1 = "yakin";
                        $diagnosa->rule_id = 51;
                        $diagnosa->saran_id = 51;

                        $diagnosa->hasil_diagnosa = "rendah";
                    }
                    if ($request->gejala_1 >= 48 && $request->gejala_1 <= 57) {
                        $diagnosa->gejala_1 = "mungkin";
                        if ($request->gejala_2 >= 58) {
                            $diagnosa->gejala_2 = "yakin";
                            if ($request->gejala_3 >= 58) {
                                $diagnosa->gejala_3 = "yakin";
                                if ($request->gejala_4 >= 58) {
                                    $diagnosa->gejala_4 = "yakin";
                                    if ($request->gejala_5 >= 58) {
                                        $diagnosa->gejala_5 = "yakin";
                                        $diagnosa->rule_id = 52;
                                        $diagnosa->saran_id = 52;
                                        $diagnosa->hasil_diagnosa = "rendah";
                                    }
                                    if ($request->gejala_5 >= 48 && $request->gejala_5 <= 57) {
                                        $diagnosa->gejala_5 = "mungkin";
                                        $diagnosa->rule_id = 53;
                                        $diagnosa->saran_id = 53;
                                        $diagnosa->hasil_diagnosa = "rendah";
                                    }
                                    if ($request->gejala_5 >= 1 && $request->gejala_5 <= 47) {
                                        $diagnosa->gejala_5 = "tidak yakin";
                                        $diagnosa->rule_id = 54;
                                        $diagnosa->saran_id = 54;
                                        $diagnosa->hasil_diagnosa = "rendah";
                                    }
                                }
                                if ($request->gejala_4 <= 57) {
                                    $diagnosa->gejala_4 = "tidak yakin";
                                    $diagnosa->rule_id = 55;
                                    $diagnosa->saran_id = 55;
                                    $diagnosa->hasil_diagnosa = "rendah";
                                }
                            }
                            if ($request->gejala_3 <= 57) {
                                $diagnosa->gejala_3 = "tidak yakin";
                                $diagnosa->rule_id = 56;
                                $diagnosa->saran_id = 56;
                                $diagnosa->hasil_diagnosa = "rendah";
                            }
                        }
                        if ($request->gejala_2 >= 48 && $request->gejala_2 <= 57) {
                            $diagnosa->gejala_2 = "mungkin";
                            $diagnosa->rule_id = 57;
                            $diagnosa->saran_id = 57;
                            $diagnosa->hasil_diagnosa = "rendah";
                        }
                        if ($request->gejala_2 >= 1 && $request->gejala_2 <= 47) {
                            $diagnosa->gejala_2 = "tidak yakin";
                            $diagnosa->rule_id = 58;
                            $diagnosa->saran_id = 58;
                            $diagnosa->hasil_diagnosa = "rendah";
                        }
                    }
                    if ($request->gejala_1 >= 1 && $request->gejala_1 <= 47) {
                        $diagnosa->gejala_1 = "tidak yakin";
                        $diagnosa->rule_id = 59;
                        $diagnosa->saran_id = 59;
                        $diagnosa->hasil_diagnosa = "rendah";
                    }
                }

            }
            //end rule 47 sampai 59


            //tulis code disini
        }

        if ($request->gejala_7 >= 1 && $request->gejala_7 <= 47) {
            $diagnosa->gejala_7 = "tidak yakin";
            if ($request->gejala_14 >= 58) {
                $diagnosa->gejala_14 = "yakin";
                if ($request->gejala_1 >= 58) {
                    $diagnosa->gejala_1 = "yakin";
                    $diagnosa->rule_id = 60;
                    $diagnosa->saran_id = 60;
                    $diagnosa->hasil_diagnosa = "rendah";
                }
                if ($request->gejala_1 >= 48 && $request->gejala_1 <= 57) {
                    $diagnosa->gejala_1 = "mungkin";
                    $diagnosa->rule_id = 61;
                    $diagnosa->saran_id = 61;
                    $diagnosa->hasil_diagnosa = "sedang";
                }
                if ($request->gejala_1 >= 1 && $request->gejala_1 <= 47) {
                    $diagnosa->gejala_1 = "tidak yakin";
                    if ($request->usia >= 17) {
                        $diagnosa->usia = "pemuda";
                        if ($request->gejala_2 >= 58) {
                            $diagnosa->gejala_2 = "yakin";
                            $diagnosa->rule_id = 62;
                            $diagnosa->saran_id = 62;
                            $diagnosa->hasil_diagnosa = "tinggi";
                        }
                        if ($request->gejala_2 >= 1 && $request->gejala_2 <= 47) {
                            $diagnosa->gejala_2 = "tidak yakin";
                            $diagnosa->rule_id = 63;
                            $diagnosa->saran_id = 63;
                            $diagnosa->hasil_diagnosa = "rendah";
                        }
                    }
                }
            }
            if ($request->gejala_14 >= 48 && $request->gejala_14 <= 57) {
                $diagnosa->gejala_14 = "mungkin";
                if ($request->usia >= 17) {
                    $diagnosa->usia = "pemuda";
                    if ($request->gejala_1 >= 48) {
                        $diagnosa->gejala_1 = "yakin";
                        $diagnosa->rule_id = 64;
                        $diagnosa->saran_id = 64;
                        $diagnosa->hasil_diagnosa = "rendah";
                    }
                    if ($request->gejala_1 >= 1 && $request->gejala_1 <= 47) {
                        $diagnosa->gejala_1 = "tidak yakin";
                        if ($request->gejala_2 >= 58) {
                            $diagnosa->gejala_2 = "yakin";
                            $diagnosa->rule_id = 65;
                            $diagnosa->saran_id = 65;
                            $diagnosa->hasil_diagnosa = "sedang";
                        }
                        if ($request->gejala_2 >= 48 && $request->gejala_2 <= 57) {
                            $diagnosa->gejala_2 = "mungkin";
                            $diagnosa->rule_id = 66;
                            $diagnosa->saran_id = 66;
                            $diagnosa->hasil_diagnosa = "sedang";
                        }
                        if ($request->gejala_2 >= 1 && $request->gejala_2 <= 47) {
                            $diagnosa->gejala_2 = "tidak yakin";
                            if ($request->gejala_3 >= 48) {
                                $diagnosa->gejala_3 = "yakin";
                                $diagnosa->rule_id = 67;
                                $diagnosa->saran_id = 67;
                                $diagnosa->hasil_diagnosa = "rendah";
                            }
                            if ($request->gejala_3 >= 1 && $request->gejala_3 <= 47) {
                                $diagnosa->gejala_3 = "tidak yakin";
                                $diagnosa->rule_id = 68;
                                $diagnosa->saran_id = 68;
                                $diagnosa->hasil_diagnosa = "rendah";
                            }
                        }
                    }

                }
                if ($request->usia < 17) {
                    $diagnosa->usia = "pemuda";
                    $diagnosa->rule_id = 69;
                    $diagnosa->saran_id = 69;
                    $diagnosa->hasil_diagnosa = "rendah";
                }
            }

            if ($request->gejala_14 >= 1 && $request->gejala_14 <= 47) {
                $diagnosa->gejala_14 = "tidak yakin";
                if ($request->gejala_6 >= 58) {
                    $diagnosa->gejala_6 = "yakin";
                    if ($request->usia >= 17) {
                        $diagnosa->usia = "pemuda";
                        if ($request->gejala_1 >= 58) {
                            $diagnosa->gejala_1 = "yakin";
                            $diagnosa->rule_id = 70;
                            $diagnosa->saran_id = 70;
                            $diagnosa->hasil_diagnosa = "tinggi";
                        }
                        if ($request->gejala_1 >= 48 && $request->gejala_1 <= 57) {
                            $diagnosa->gejala_1 = "mungkin";
                            $diagnosa->rule_id = 71;
                            $diagnosa->saran_id = 71;
                            $diagnosa->hasil_diagnosa = "sedang";
                        }
                        if ($request->gejala_1 >= 1 && $request->gejala_1 <= 47) {
                            $diagnosa->gejala_1 = "tidak yakin";
                            $diagnosa->rule_id = 72;
                            $diagnosa->saran_id = 72;
                            $diagnosa->hasil_diagnosa = "sedang";
                        }
                    }
                    if ($request->usia < 17) {
                        $diagnosa->usia = "dibawah umur";
                        $diagnosa->rule_id = 73;
                        $diagnosa->saran_id = 73;
                        $diagnosa->hasil_diagnosa = "tinggi";
                    }
                }
                if ($request->gejala_6 >= 48 && $request->gejala_6 <= 57) {
                    $diagnosa->gejala_6 = "mungkin";
                    $diagnosa->rule_id = 74;
                    $diagnosa->saran_id = 74;
                    $diagnosa->hasil_diagnosa = "sedang";
                }
                if ($request->gejala_6 >= 1 && $request->gejala_6 <= 47) {
                    $diagnosa->gejala_6 = "tidak yakin";
                    if ($request->usia >= 17) {
                        $diagnosa->usia = "pemuda";
                        if ($request->gejala_1 >= 58) {
                            $diagnosa->gejala_1 = "yakin";
                            if ($request->gejala_2 >= 58) {
                                $diagnosa->gejala_2 = "yakin";
                                $diagnosa->rule_id = 75;
                                $diagnosa->saran_id = 75;

                                $diagnosa->hasil_diagnosa = "sedang";
                            }
                            if ($request->gejala_2 <= 57) {
                                $diagnosa->gejala_2 = "mungkin";
                                $diagnosa->rule_id = 76;
                                $diagnosa->saran_id = 76;
                                $diagnosa->hasil_diagnosa = "rendah";
                            }

                        }
                        if ($request->gejala_1 >= 48 && $request->gejala_1 <= 57) {
                            $diagnosa->gejala_1 = "mungkin";
                            if ($request->gejala_2 >= 58) {
                                $diagnosa->gejala_2 = "yakin";
                                if ($request->gejala_3 >= 58) {
                                    $diagnosa->gejala_3 = "yakin";
                                    $diagnosa->rule_id = 77;
                                    $diagnosa->saran_id = 77;
                                    $diagnosa->hasil_diagnosa = "rendah";
                                }
                                if ($request->gejala_3 >= 48 && $request->gejala_3 <= 57) {
                                    $diagnosa->gejala_3 = "mungkin";
                                    if ($request->gejala_4 >= 58) {
                                        $diagnosa->gejala_4 = "yakin";
                                        $diagnosa->rule_id = 78;
                                        $diagnosa->saran_id = 78;
                                        $diagnosa->hasil_diagnosa = "rendah";
                                    }
                                    if ($request->gejala_4 >= 48 && $request->gejala_4 <= 57) {
                                        $diagnosa->gejala_4 = "mungkin";
                                        $diagnosa->rule_id = 79;
                                        $diagnosa->saran_id = 79;
                                        $diagnosa->hasil_diagnosa = "rendah";
                                    }
                                    if ($request->gejala_4 >= 1 && $request->gejala_4 <= 47) {
                                        $diagnosa->gejala_4 = "tidak yakin";
                                        $diagnosa->rule_id = 80;
                                        $diagnosa->saran_id = 80;
                                        $diagnosa->hasil_diagnosa = "rendah";
                                    }
                                }
                                if ($request->gejala_3 >= 1 && $request->gejala_3 <= 47) {
                                    $diagnosa->gejala_3 = "tidak yakin";
                                    $diagnosa->rule_id = 81;
                                    $diagnosa->saran_id = 81;
                                    $diagnosa->hasil_diagnosa = "rendah";
                                }
                            }
                            if ($request->gejala_2 >= 48 && $request->gejala_2 <= 57) {
                                $diagnosa->gejala_2 = "mungkin";
                                if ($request->gejala_3 >= 58) {
                                    $diagnosa->gejala_3 = "yakin";
                                    $diagnosa->rule_id = 82;
                                    $diagnosa->saran_id = 82;
                                    $diagnosa->hasil_diagnosa = "rendah";
                                }
                                if ($request->gejala_3 >= 48 && $request->gejala_3 <= 57) {
                                    $diagnosa->gejala_3 = "mungkin";
                                    if ($request->gejala_4 >= 58) {
                                        $diagnosa->gejala_4 = "yakin";
                                        if ($request->gejala_5 >= 58) {
                                            $diagnosa->gejala_5 = "yakin";
                                            $diagnosa->rule_id = 83;
                                            $diagnosa->saran_id = 83;
                                            $diagnosa->hasil_diagnosa = "rendah";
                                        }
                                        if ($request->gejala_5 >= 48 && $request->gejala_5 <= 57) {
                                            $diagnosa->gejala_5 = "mungkin";
                                            $diagnosa->rule_id = 84;
                                            $diagnosa->saran_id = 84;
                                            $diagnosa->hasil_diagnosa = "rendah";
                                        }
                                        if ($request->gejala_5 >= 1 && $request->gejala_5 <= 47) {
                                            $diagnosa->gejala_5 = "tidak yakin";
                                            $diagnosa->rule_id = 85;
                                            $diagnosa->saran_id = 85;
                                            $diagnosa->hasil_diagnosa = "rendah";
                                        }
                                    }
                                    if ($request->gejala_4 >= 48 && $request->gejala_4 <= 57) {
                                        $diagnosa->gejala_4 = "mungkin";
                                        $diagnosa->rule_id = 86;
                                        $diagnosa->saran_id = 86;
                                        $diagnosa->hasil_diagnosa = "rendah";
                                    }
                                    if ($request->gejala_4 >= 1 && $request->gejala_4 <= 47) {
                                        $diagnosa->gejala_4 = "tidak yakin";
                                        $diagnosa->rule_id = 87;
                                        $diagnosa->saran_id = 87;
                                        $diagnosa->hasil_diagnosa = "rendah";
                                    }

                                }
                                if ($request->gejala_3 >= 1 && $request->gejala_3 <= 47) {
                                    $diagnosa->gejala_3 = "tidak yakin";
                                    $diagnosa->rule_id = 88;
                                    $diagnosa->saran_id = 88;
                                    $diagnosa->hasil_diagnosa = "rendah";
                                }
                            }
                        }
                        if ($request->gejala_1 >= 1 && $request->gejala_1 <= 47) {
                            $diagnosa->gejala_1 = "tidak yakin";
                            if ($request->gejala_2 >= 58) {
                                $diagnosa->gejala_2 = "yakin";
                                $diagnosa->rule_id = 89;
                                $diagnosa->saran_id = 89;
                                $diagnosa->hasil_diagnosa = "rendah";
                            }
                            if ($request->gejala_2 >= 48 && $request->gejala_2 <= 57) {
                                $diagnosa->gejala_2 = "mungkin";
                                $diagnosa->rule_id = 90;
                                $diagnosa->saran_id = 90;
                                $diagnosa->hasil_diagnosa = "rendah";
                            }
                            if ($request->gejala_2 >= 1 && $request->gejala_2 <= 47) {
                                $diagnosa->gejala_2 = "tidak yakin";
                                $diagnosa->rule_id = 91;
                                $diagnosa->saran_id = 91;
                                $diagnosa->hasil_diagnosa = "rendah";
                            }
                        }
                    }
                    if ($request->usia < 17) {
                        $diagnosa->usia = "dibawah umur";
                        if ($request->gejala_1 >= 1) {
                            $diagnosa->gejala_1 = "mungkin";
                            if ($request->gejala_2 >= 1) {
                                $diagnosa->gejala_2 = "mungkin";
                                if ($request->gejala_3 >= 58) {
                                    $diagnosa->gejala_3 = "yakin";
                                    $diagnosa->rule_id = 92;
                                    $diagnosa->saran_id = 92;
                                    $diagnosa->hasil_diagnosa = "rendah";
                                }
                                if ($request->gejala_3 >= 48 && $request->gejala_3 <= 57) {
                                    $diagnosa->gejala_3 = "mungkin";
                                    $diagnosa->rule_id = 93;
                                    $diagnosa->saran_id = 93;
                                    $diagnosa->hasil_diagnosa = "rendah";
                                }
                                if ($request->gejala_3 >= 1 && $request->gejala_3 <= 47) {
                                    $diagnosa->gejala_3 = "tidak yakin";
                                    $diagnosa->rule_id = 94;
                                    $diagnosa->saran_id = 94;
                                    $diagnosa->hasil_diagnosa = "rendah";
                                }
                            }
                        }
                    }
                }
            }
        }


        $diagnosa->user_id = Auth::id();
        $diagnosa->save();
        return $diagnosa;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
}
