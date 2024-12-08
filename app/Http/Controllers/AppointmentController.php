namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        // Static data
        $pageTitle = 'Doctor Appointment Booking';
        $doctorName = 'Dr. John Doe';
        $clinicName = 'Healthcare Clinic';
        $appointmentSlots = [
            '10:00 AM - 10:30 AM',
            '11:00 AM - 11:30 AM',
            '02:00 PM - 02:30 PM',
            '03:00 PM - 03:30 PM',
        ];

        // Passing data to the view
        return view('appointments.index', compact('pageTitle', 'doctorName', 'clinicName', 'appointmentSlots'));
    }
}
