<?php declare(strict_types=1);


namespace Bytedance\Handlers\Payment;

use Bytedance\Handlers\Payment\Requests\CreateOrder\CreateOrderRequest;
use Bytedance\Handlers\Payment\Requests\CreateOrder\CreateOrderResponse;
use Bytedance\Handlers\Payment\Requests\CreateRefund\CreateRefundRequest;
use Bytedance\Handlers\Payment\Requests\CreateRefund\CreateRefundResponse;
// use Bytedance\Handlers\Payment\Requests\PaymentNotify\NotifyHandler;
use Bytedance\Handlers\Payment\Requests\PaymentNotify\PaymentNotify;
use Bytedance\Handlers\Payment\Requests\PaymentNotifyFactory;
use Bytedance\Handlers\Payment\Requests\QueryOrder\QueryOrderRequest;
use Bytedance\Handlers\Payment\Requests\QueryOrder\QueryOrderResponse;
use Bytedance\Handlers\Payment\Requests\QueryRefund\QueryRefundRequest;
use Bytedance\Handlers\Payment\Requests\QueryRefund\QueryRefundResponse;
use Bytedance\Handlers\Payment\Requests\RefundNotify\RefundNotify;

/**
 * @method CreateOrderResponse createOrder(string $outOrderNo, int $totalAmount, string $subject, string $body, int $validTimestamp, ?string $cpExtra = null, ?string $notifyUrl = null, ?string $thirdPartyId = null, ?int $disableMsg = null, ?string $msgPage = null, ?string $storeUid = null)
 * @method QueryOrderResponse queryOrder(string $outOrderNo, ?string $thirdPartyId = null)
 * @method QueryRefundResponse queryRefund(string $outRefundNo, ?string $thirdPartyId = null)
 * @method CreateRefundResponse createRefund(string $outOrderNo, string $outRefundNo, int $refundAmount, string $reason, ?string $cpExtra = null, ?string $notifyUrl = null, ?string $thirdPartyId = null, ?int $disableMsg = null, ?string $msgPage = null, ?int $allSettle = null)
 * @method PaymentNotify notify(array $notify)
 * @method RefundNotify refundNotify(array $notify)
 * @package Bytedance\Handlers\Payment
 */
class Manager extends \Bytedance\Kernel\Manager
{
    protected function getClassMap(): array
    {
        return [
            'createOrder' => CreateOrderRequest::class,
            'queryOrder' => QueryOrderRequest::class,
            'notify' => PaymentNotifyFactory::class,
            'createRefund' => CreateRefundRequest::class,
            'queryRefund' => QueryRefundRequest::class,
            'refundNotify' => PaymentNotifyFactory::class,
        ];
    }
}
