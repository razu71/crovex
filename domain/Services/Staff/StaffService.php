<?php


namespace domain\Services\Staff;


use App\Models\Staff\Staff;
use domain\Traits\Common\MessageTraits;

class StaffService
{
    use MessageTraits;

    protected $staff;

    public function __construct()
    {
        $this->staff = new Staff();
    }

    public function show()
    {
        return $this->staff->all();
    }

    public function get($id)
    {
        return $this->staff::find($id);
    }

    public function makeData($request)
    {
        return [
            'name' => $request->name,
            'contact' => $request->contact,
        ];
    }

    public function store($request)
    {
        try {
            $data = $this->makeData($request);
            if ($request->has('edit_id') && $request->edit_id != null) {
                $this->staff->where('id', $request->edit_id)->update($data);
                $this->data['message'] = __('Staff updated successfully');
            } else {
                $this->staff->create($data);
                $this->data['message'] = __('Staff created successfully');
            }
            $this->data['success'] = true;
            return $this->data;
        } catch (\Exception $exception) {
            info("Staff create error message " . $exception->getMessage() . " Line " . $exception->getLine());
            return $this->data;
        }
    }

    public function destroy($id)
    {
        try {
            $staff = $this->get($id);
            if (!empty($staff)) {
                $staff->delete();
                $this->data['success'] = true;
                $this->data['message'] = __('Staff deleted successfully');
            } else {
                $this->data['success'] = false;
                $this->data['message'] = __('Staff not found');
            }
            return $this->data;
        } catch (\Exception $exception) {
            info("Staff delete error message " . $exception->getMessage() . " Line " . $exception->getLine());
            $this->data['success'] = false;
            $this->data['message'] = __('Error, This staff assigned to somewhere');
            return $this->data;
        }
    }
}
