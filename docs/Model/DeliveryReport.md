# DeliveryReport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **string** | Account associated with this delivery report | [optional] 
**destination_address** | **string** | Address this delivery report was delivered to. This is the source address of the sent message that this delivery report is in response to | [optional] 
**destination_address_country** | **string** | Country associated with the destination address | [optional] 
**format** | **string** | Format of message, SMS or TTS (Text To Speech) | [optional] 
**id** | **string** | Unique ID for this delivery report | [optional] 
**in_response_to** | **string** | Unique ID of the sent message that this delivery report is in response to | [optional] 
**metadata** | **object** | Metadata associated with the sent message | [optional] 
**source_address** | **string** | Address this delivery report was received from, the destination address of the sent message that this delivery report is in response to | [optional] 
**source_address_country** | **string** | Country associated with the source address | [optional] 
**status** | **string** | Status of the message | [optional] 
**status_code** | **string** | Status code of the message | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | Date time at which this delivery report was received | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


