<?php
namespace App\Http\Controllers;

use App\Models\User;

class VerificationController extends Controller
{

    public function verify($token, $workspace_id) {

        if (!$workspace_id) {
            $user = User::where('verification_token', $token)->firstOrFail();
            $user->email_verified_at = now();
            $user->updated_at = now();
            $user->verification_token = null;
            $user->save();
            return redirect()->route('login');
        }else{
            $user = User::where('verification_token', $token)->firstOrFail();
            $user->email_verified_at = now();
            $user->updated_at = now();
            $user->verification_token = null;
            $user->save();
            return redirect()->route('info-workspace', ['workspace_id' => $workspace_id]);
        }
    }
}
