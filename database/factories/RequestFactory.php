<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\JabatanUser;
use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Request>
 */
class RequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::all();
        $user_id = $users->random()->id;
        $valid_id = array_diff($users->pluck('id')->toArray(), [$user_id]);
        $owner = $valid_id[array_rand($valid_id)];
        $aksi = $this->faker->randomElement(['proses', 'terima', 'tolak']);
        $is_downloaded = ($aksi === 'terima') ? $this->faker->boolean(40) : false;
        $pangkat = Jabatan::all()->pluck('nama')->toArray();

        return [
            'user_id' => $user_id,
            'owner' => $owner,
            'request_file' => $pangkat[array_rand($pangkat)],
            'type' => 'jabatan',
            'aksi' => $aksi,
            'token' => ($aksi === 'terima') ? Str::random(20) : '',
            'surat_keterangan' => JabatanUser::where('user_id', $owner)->first()->surat_keterangan,
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quisquam qui obcaecati magnam! Cupiditate rerum quaerat aliquam itaque saepe explicabo nobis, eveniet dolore suscipit eum a, reiciendis perferendis. Officia, rerum.',
            'slug' => JabatanUser::where('user_id', $owner)->first()->slug,
            'is_downloaded' => $is_downloaded,
            'readed' => $aksi === 'proses' ? $this->faker->boolean(50) : true,
        ];
    }
}
