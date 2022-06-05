<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResidentPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'rt'                               => 'required|exists:App\Models\NeighborhoodAssociation,id',
            'religion_id'                      => 'required|exists:App\Models\Religion,id',
            'profession_id'                    => 'required|exists:App\Models\Profession,id',
            'is_head_of_family'                => 'required|boolean',
            'birth_date'                       => 'required|date',
            'nik'                              => 'required|unique:App\Models\Resident,nik',
            'kk'                               => 'required',
            'name'                             => 'required',
            'birth_place'                      => 'required',
            'nationality'                      => 'required',
            'address'                          => 'required',
            'ethnic'                           => '',
            'language'                         => '',
            'married_status'                   => 'required',
            'profession_status'                => '',
            'daily_activity'                   => '',
            'home_ownership'                   => 'required',
            'relationship_with_head_of_family' => 'required',
        ];
    }

    public function messages()
    {
        $messages = [
            'rt.required'                               => 'RT harus diisi.',
            'rt.exists'                                 => 'RT yang dipilih tidak ditemukan di database.',
            'religion_id.required'                      => 'Agama harus diisi.',
            'religion_id.exists'                        => 'Agama yang dipilih tidak ditemukan di database.',
            'profession_id.required'                    => 'Profesi harus diisi.',
            'profession_id.exists'                      => 'Profesi yang dipilih tidak ditemukan di database.',
            'is_head_of_family.required'                => 'Harus pilih salah satu.',
            'birth_date.required'                       => 'Tanggal lahir harus diisi',
            'nik.required'                              => 'NIK harus diisi.',
            'kk.required'                               => 'No. KK harus diisi.',
            'name.required'                             => 'Nama harus diisi.',
            'birth_place.required'                      => 'Tempat lahir harus diisi.',
            'nationality.required'                      => 'Kebangsaan harus diisi.',
            'address.required'                          => 'Alamat harus diisi.',
            'ethnic'                                    => 'Suku harus diisi.',
            'language'                                  => 'Bahasa harus diisi.',
            'married_status.required'                   => 'Status pernikahan harus diisi.',
            'profession_status'                         => 'Status profesi harus diisi.',
            'daily_activity'                            => 'Kegiatan rutin harus diisi.',
            'home_ownership.required'                   => 'pilih salah satu.',
            'relationship_with_head_of_family.required' => 'Hubungan dengan kepala keluarga harus diisi.',
        ];

        return $messages;
    }
}
