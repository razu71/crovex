<?php


namespace domain\Services\Disallow;


use App\Models\Disallow\Disallow;
use domain\Traits\Common\MessageTraits;

class DisallowService
{
    use MessageTraits;
    protected $disallow;

    public function __construct()
    {
        $this->disallow = new Disallow();
    }

    public function show()
    {
        return $this->disallow->all();
    }

    public function get($id)
    {
        return $this->disallow::find($id);
    }

    public function makeData($request){
        return [
            'name' => $request->name,
            'type' => $request->type,
        ];
    }

    public function store($request)
    {
        try {
            $data = $this->makeData($request);
            if ($request->has('edit_id') && $request->edit_id != null){
                $this->disallow->where('id', $request->edit_id)->update($data);
                $this->data['message'] = __('Disallow item updated successfully');
            }else{
                $this->disallow->create($data);
                $this->data['message'] = __('Disallow item created successfully');
            }
            $this->data['success'] = true;
            return $this->data;
        }catch (\Exception $exception){
            info("Disallow item create error message ".$exception->getMessage()." Line ".$exception->getLine());
            return $this->data;
        }
    }

    public function destroy($id)
    {
        try {
            $disallow = $this->get($id);
            if (!empty($disallow)){
                $disallow->delete();
                $this->data['success'] = true;
                $this->data['message'] = __('Disallow item deleted successfully');
            }else{
                $this->data['success'] = false;
                $this->data['message'] = __('Disallow item not found');
            }
            return $this->data;
        }catch (\Exception $exception){
            info("Disallow item delete error message ".$exception->getMessage()." Line ".$exception->getLine());
            return $this->data;
        }
    }
}
