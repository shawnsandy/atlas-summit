<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 8/8/2017
     * Time: 8:08 PM
     */

    namespace App\Http\Controllers\Auth;


    use App\Http\Controllers\Controller;
    use Auth;
    use Silber\Bouncer\BouncerFacade as Bouncer;
    use Silber\Bouncer\Database\Role;

    class AuthSetupController extends Controller
    {

        public function __invoke()
        {

            if (count(Role::where('name', 'superadmin')->get())):
                Flash()->error("You are not authorized to perform this action");
                return back()->with('Error', "You are not authorised to perform this action");
            endif;

            if (Bouncer::assign(["superadmin", "admin"])->to(Auth::user())):
                Bouncer::allow("superadmin")->to(["superadmin-ability", "admin-ability"]);
                Bouncer::allow("admin")->to(["admin-ability"]);
                Flash()->success("Super admin created");
                return redirect("/admin");
            endif;

            Flash()->error("You are not authorised to perform this action");
            return back()->with('error', "Ooops an error occurred processing your account");

        }

    }
