<?php
class LoanInfoSecondaryBean
{
	/*
	 * �����տ���ID
	 */
	public $LoanInMoneymoremore = "";
	
	/*
	 * ���
	 */
	public $Amount = "";
	
	/*
	 * ��;
	 */
	public $TransferName = "";
	
	/*
	 * ��ע
	 */
	public $Remark = "";

	public function __construct($LoanInMoneymoremore,$Amount,$TransferName,$Remark)
	{
		$this->LoanInMoneymoremore = $LoanInMoneymoremore;
		$this->Amount = $Amount;
		$this->TransferName = $TransferName;
		$this->Remark = $Remark;
	}
}
?>